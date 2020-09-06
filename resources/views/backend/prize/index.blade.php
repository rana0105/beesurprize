@extends('backend.layouts.app')
@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('prize.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table cellspacing="0" class="table table-bordered custom-btn" id="dataprize" width="100%">
              <thead>
                  <tr>
                      <th>
                          #
                      </th>
                      <th>
                          Name
                      </th>
                      <th>
                          Status
                      </th>
                      <th>
                          Action
                      </th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>
                          #
                      </th>
                       <th>
                          Name
                      </th>
                      <th>
                          Status
                      </th>
                      <th>
                          Action
                      </th>
                  </tr>
              </tfoot>
              <tbody>
                @foreach($prizes as $key => $prize)
                  <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $prize->name }}</td>
                      <td>
                        @if($prize === 1)
                          Active
                        @else
                          Deactive
                        @endif
                      </td>
                      <td>
                          <a class="admin-actionbtn" href="#">
                              <i class="far fa-edit fa-lg">
                              </i>
                          </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['prize.create', 1],'style'=>'display:inline']) !!}
                          <button class="admin-actionbtn" type="">
                              <i class="fas fa-trash-alt fa-lg">
                              </i>
                          </button>
                          {!! Form::close() !!}
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
      $('#dataprize').DataTable();
    });
  </script>
  @endsection