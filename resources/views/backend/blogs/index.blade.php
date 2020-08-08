 @extends('backend.layouts.app')


@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('blogs.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered custom-btn" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Create Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Create Date</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($blogs as $key => $blog)
            <tr>
              <td>{{ ++$i }}</td>
              <td>{{ $blog->title }}</td>
              <td>{!! $blog->detail !!}</td>
              <td>{{ date('d-M-Y', strtotime($blog->created_at)) }}</td>
              <td>
                <a class="admin-actionbtn" href="{{ route('blogs.show',$blog->id) }}"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a>
                @can('blog-edit')
                    <a class="admin-actionbtn" href="{{ route('blogs.edit',$blog->id) }}"><i class="far fa-edit fa-lg"></i></a>
                @endcan
                @can('blog-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['blogs.destroy', $blog->id],'style'=>'display:inline']) !!}
                      <button type="submit" class="admin-actionbtn"><i class="fas fa-trash-alt fa-lg"></i></button> 
                    {!! Form::close() !!}
                @endcan
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection
  @section('script')
  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
  @endsection