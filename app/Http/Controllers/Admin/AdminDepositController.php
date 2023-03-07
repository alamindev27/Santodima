<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use App\Models\Deposit;
use App\Models\DepositeAddress;
use App\Models\ReferUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdminDepositController extends Controller
{
    public function index()
    {
        $trcTypes = DB::table('deposits')
        ->where([['deposits.deposit_type', 'TRC'], ['deleted_status', '1']])
        ->select('deposits.*', 'users.name')
        ->leftJoin('users', 'users.id', 'deposits.user_id')
        ->orderBy('id', 'DESC')
        ->paginate(20);
        return view('admin.deposit.index', compact('trcTypes'));
    }

    public function TRC20()
    {
        $trc20Types = DB::table('deposits')
        ->where([['deposits.deposit_type', 'TRC20'], ['deleted_status', '1']])
        ->select('deposits.*', 'users.name')
        ->leftJoin('users', 'users.id', 'deposits.user_id')
        ->orderBy('id', 'DESC')
        ->paginate(20);
        return view('admin.deposit.trc20', compact('trc20Types'));
    }


    public function ERC20()
    {
        $erc20Types = DB::table('deposits')
        ->where([['deposits.deposit_type', 'ERC20'], ['deleted_status', '1']])
        ->select('deposits.*', 'users.name')
        ->leftJoin('users', 'users.id', 'deposits.user_id')
        ->orderBy('id', 'DESC')
        ->paginate(20);
        return view('admin.deposit.erc20', compact('erc20Types'));
    }

    public function approved($id)
    {
        $depositId = Crypt::decrypt($id);
        $deposit = Deposit::where('id', $depositId)->first();

        $approved = $deposit->update([
            'status' => 'approved'
        ]);

        if ($approved) {
            $user = User::where('id', $deposit->user_id)->first();

            $user->increment('balance', $deposit->amount);
            $referUser = ReferUser::where('auth_id', $deposit->user_id)->first();
            $commission = Commission::find(1);
            if ($referUser)
            {
                $firstStepAmount = $deposit->amount*$commission->commission1/100;
                User::where('id', $referUser->refer_id)->increment('balance', $firstStepAmount);

                $useId = ReferUser::where('auth_id', $referUser->refer_id)->first();
                if ($useId) {
                    $firstStepAmount = $deposit->amount*$commission->commission2/100;
                    User::where('id', $useId->refer_id)->increment('balance', $firstStepAmount);
                }
            }


            if ($deposit->amount > 1 && $deposit->amount < 499) {
                $user->update([
                    'level' => 'Lvl 1'
                ]);
            }

            elseif ($deposit->amount > 499 && $deposit->amount < 1999) {
                $user->update([
                    'level' => 'Lvl 2'
                ]);
            }

            elseif ($deposit->amount > 1999 && $deposit->amount < 4999) {
                $user->update([
                    'level' => 'Lvl 3'
                ]);
            }

            elseif ($deposit->amount > 4999 && $deposit->amount < 29999) {
                $user->update([
                    'level' => 'Lvl 4'
                ]);
            }

            elseif ($deposit->amount > 29999 && $deposit->amount < 79999) {
                $user->update([
                    'level' => 'Lvl 5'
                ]);
            }


            elseif ($deposit->amount > 79999 || $deposit->amount < 9999999) {
                $user->update([
                    'level' => 'Lvl 6'
                ]);
            }

        }
        return back()->with('success', 'Deposit Approved Successful');
    }

    public function rejected($id)
    {
        $depositId = Crypt::decrypt($id);
        $deposit = Deposit::where('id', $depositId)->first();

        $deposit->update([
            'status' => 'rejected'
        ]);

        return back()->with('success', 'Deposit Rejected');
    }

    public function moveToTrash($id)
    {
        $depositId = Crypt::decrypt($id);
        $deposit = Deposit::where('id', $depositId)->first();

        $deposit->update([
            'deleted_status' => '0'
        ]);

        return back()->with('success', 'Done');
    }


    public function restore($id)
    {
        $depositId = Crypt::decrypt($id);
        $deposit = Deposit::where('id', $depositId)->first();

        $deposit->update([
            'deleted_status' => '1'
        ]);

        return back()->with('success', 'Done');
    }

    public function trash()
    {
        $trashes = DB::table('deposits')
        ->where('deleted_status', '0')
        ->select('deposits.*', 'users.name')
        ->leftJoin('users', 'users.id', 'deposits.user_id')
        ->orderBy('id', 'DESC')
        ->paginate(20);
        return view('admin.deposit.trash', compact('trashes'));
    }

    public function delete($id)
    {
        $depositId = Crypt::decrypt($id);
        $deposit = Deposit::where('id', $depositId)->first();
        $deposit->delete();

        return back()->with('success', 'Done');
    }

    public function depositAddress()
    {
        $addresses = DepositeAddress::get();
        return view('admin.deposit.deposit-addres', compact('addresses'));
    }

    public function depositAddressSubmit(Request $request)
    {
        $request->validate([
            'currency' => 'required',
            'address' => 'required'
        ]);

        DepositeAddress::insert([
            'currency' => $request->currency,
            'address' => $request->address
        ]);
        return back()->with('success', 'Added Successfully');
    }

    public function depositAddressEdit($id)
    {
        $data = DepositeAddress::where('id', $id)->first();
        return view('admin.deposit.edit', compact('data'));
    }

    public function depositAddressUpdate(Request $request, $id)
    {
        $request->validate([
            'currency' => 'required',
            'address' => 'required'
        ]);

        DepositeAddress::where('id', $id)->update([
            'currency' => $request->currency,
            'address' => $request->address
        ]);
        return redirect()->route('admin.deposit.address')->with('success', 'Updated Successfully');
    }

    public function depositAddressDelete($id)
    {
        DepositeAddress::where('id', $id)->delete();
        return back()->with('success', 'Updated Successfully');
    }
}
