@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tasks</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
              <div class="x_content">
                  <table class="table mt-3 table-bordered">
                      <thead class="thead-dark">
                        <tr class="text-center">
                          <th scope="col">#</th>
                          <th scope="col">File</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @forelse ($tasks as $task)
                              <tr>
                                  <td>{{ ++$loop->index }}</td>
                                  <td>
                                    <iframe src="{{ asset($task->file) }}" scrolling="no" loading="lazy" width="350"></iframe>
                                  </td>
                                  <td>
                                      <a class="text-danger" href="{{ route('admin.task.delete', $task->id) }}">Delete</a>
                                  </td>
                              </tr>
                          @empty
                              <tr>
                                  <td colspan="50" class="text-center">No Data</td>
                              </tr>
                          @endforelse


                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>


</div>
@endsection
