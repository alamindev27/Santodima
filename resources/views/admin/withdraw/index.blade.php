@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Request Withdraw</h3>
      </div>
    </div>
    <div class="clearfix"></div>

      <table class="table mt-3 table-bordered">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>
                <tr class="text-center">
                    <th scope="row">{{ ++$loop->index }}</th>
                </tr>
        </tbody>
    </table>
    {{ $trcTypes->withQueryString()->links() }}
</div>
@endsection
