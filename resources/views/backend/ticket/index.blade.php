 @extends('backend.layouts.app')


@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('live-competition.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered custom-btn" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Contest No</th>
              <th>Amount</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Contest No</th>
              <th>Amount</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($blogs as $key => $blog)
            <tr>
              <td>{{ ++$key }}</td>
              <td>{{ $blog->title }}</td>
              <td>T20</td>
              <td>200</td>
              <td>11</td>
              <td>
                @can('blog-edit')
                    <a class="admin-actionbtn" href="{{ route('live-competition.show',$blog->id) }}">Suspend</a>
                @endcan
                @can('blog-edit')
                    <a class="admin-actionbtn" href="{{ route('live-competition.edit',$blog->id) }}"><i class="far fa-edit fa-lg"></i></a>
                @endcan
                @can('blog-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['live-competition.destroy', $blog->id],'style'=>'display:inline']) !!}
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