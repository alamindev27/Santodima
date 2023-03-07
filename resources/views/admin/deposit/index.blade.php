@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Request Deposit</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <ul class="nav bg-secondary">
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold {{ Request::url() == route('admin.deposit.index') ? 'text-success' : '' }}" aria-current="page" href="{{ route('admin.deposit.index') }}">TRC Request</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold {{ Request::url() == route('admin.deposit.TRC20') ? 'text-success' : '' }}" href="{{ route('admin.deposit.TRC20') }}">TRC20 Request</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white font-weight-bold {{ Request::url() == route('admin.deposit.ERC20') ? 'text-success' : '' }}" href="{{ route('admin.deposit.ERC20') }}">ERC20 Request</a>
        </li>
      </ul>

      <table class="table mt-3 table-bordered">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Deposit Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($trcTypes as $type)
                <tr class="text-center">
                    <th scope="row">{{ ++$loop->index }}</th>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->deposit_type }}</td>
                    <td>{{ $type->amount }}</td>
                    <td class="text-capitalize">
                    @if ($type->status == 'pending')
                        <span class="badge badge-warning">{{ $type->status }}</span>
                    @elseif ($type->status == 'approved')
                        <span class="badge badge-success">{{ $type->status }}</span>
                    @elseif ($type->status == 'rejected')
                        <span class="badge badge-danger">{{ $type->status }}</span>
                    @endif
                    </td>
                    <td>
                        @if ($type->status == 'pending')
                            <a href="{{ route('admin.deposit.approved', Crypt::encrypt($type->id)) }}" class="text-success">Approve</a>
                            <a href="{{ route('admin.deposit.rejected', Crypt::encrypt($type->id)) }}" class="text-danger">Reject</a>
                        @else
                            <a href="{{ route('admin.deposit.trash', Crypt::encrypt($type->id)) }}" class="text-danger">Move to Trash</a>
                        @endif
                    </td>
                </tr>
            @empty
            <tr><td colspan="50" class="text-center">No Data</td></tr>
            @endforelse

        </tbody>
    </table>
    {{ $trcTypes->withQueryString()->links() }}


</div>
@endsection
