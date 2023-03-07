@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sliders</h3>
      </div>
    </div>
    <div class="clearfix"></div>

      <table class="table mt-3 table-bordered">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($sliders as $slider)
                <tr class="text-center">
                    <th scope="row">{{ ++$loop->index }}</th>
                    <td>
                        <img src="{{ asset($slider->image) }}" alt="" width="150">
                    </td>
                    <td>
                        <a href="{{ route('slider.edit', Crypt::encrypt($slider->id)) }}" class="text-primary">Edit</a>

                        <form action="{{ rotue('slider.destry', Crypt::encrypt($slider->id)) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-danger border-0">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="50" class="text-center">No Data</td></tr>
            @endforelse

        </tbody>
    </table>


</div>
@endsection
