<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{
    public function index()
    {
        return view('user.deposit.index');
    }

    public function usdtPay()
    {
        if ($_GET['depositMethod'] == 'TRC'){
            return view('user.deposit.usdtPay');
        }
        elseif ($_GET['depositMethod'] == 'TRC20' || $_GET['depositMethod'] == 'ERC20'){
            return view('user.deposit.usdtPay-trc-erc');
        }
        else{
            return back();
        }

    }

    public function storeDeposit (Request $request)
    {
        if ($request->depositMethod == 'TRC') {
            $request->validate([
                'depositMethod' => 'required',
                'amount' => 'required | numeric',
            ]);
            Deposit::insert([
                'user_id' => auth()->user()->id,
                'deposit_type' => $request->depositMethod,
                'amount' => $request->amount,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('user.index')->with('success', 'Deposit Successfully');
        }
        elseif ($request->depositMethod == 'TRC20' || $request->depositMethod == 'ERC20') {
            $request->validate([
                'depositMethod' => 'required',
                'amount' => 'required | numeric',
                'tId_tHash' => 'required',
                't_certificate' => 'image|mimes:jpg, png',
            ],[
                'tId_tHash.required' => 'Transaction TXID or Transaction HASH field is required'
            ]);

            $file = $request->file('t_certificate');
            $fileName = time().'-certificate-image.'.$file->getClientOriginalExtension();
            $path = 't_certificate/';
            $request->t_certificate->move($path, $fileName);
            Deposit::insert([
                'user_id' => auth()->user()->id,
                'deposit_type' => $request->depositMethod,
                'amount' => $request->amount,
                'tId_tHash' => $request->tId_tHash,
                't_certificate' => $path. $fileName,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('user.index')->with('success', 'Deposit Successfully');
        }else{
            return back()->with('dmnf', 'Invalid deposit method');
        }
    }
}
