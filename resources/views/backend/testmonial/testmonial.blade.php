 @extends('backend.layouts.app')


@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('customer-testmonial.create') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table cellspacing="0" class="table table-bordered custom-btn" id="dataTableLogo" width="100%">
              <thead>
                  <tr>
                      <th>
                          #
                      </th>
                      <th>
                          Customer Name
                      </th>
                      <th>
                          Title
                      </th>
                      <th>
                          Comment
                      </th>
                      <th>
                          Image
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
                          Customer Name
                      </th>
                      <th>
                          Title
                      </th>
                      <th>
                          Comment
                      </th>
                      <th>
                          Image
                      </th>
                      <th>
                          Action
                      </th>
                  </tr>
              </tfoot>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Sumrat</td>
                      <td>Lorem ipsum dolor sit amet</td>
                      <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.
                      </td>
                      <td><img src="{{ asset('/backend/img/admin.png') }}" alt=""></td>
                      <td>
                          <a class="admin-actionbtn" href="#">
                              <i class="far fa-edit fa-lg">
                              </i>
                          </a>
                          {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', 1],'style'=>'display:inline']) !!}
                          <button class="admin-actionbtn" type="">
                              <i class="fas fa-trash-alt fa-lg">
                              </i>
                          </button>
                          {!! Form::close() !!}
                      </td>
                  </tr>
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