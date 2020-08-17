 @extends('backend.layouts.app')


@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href="{{ route('create-mcqlist') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a></h6>
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
                          Question
                      </th>
                      <th>
                          Ans A
                      </th>
                      <th>
                          Ans B
                      </th>
                      <th>
                          Ans C
                      </th>
                      <th>
                          Ans D
                      </th>
                      <th>
                          Right Ans
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
                          Question
                      </th>
                      <th>
                          Ans A
                      </th>
                      <th>
                          Ans B
                      </th>
                      <th>
                          Ans C
                      </th>
                      <th>
                          Ans D
                      </th>
                      <th>
                          Right Ans
                      </th>
                      <th>
                          Action
                      </th>
                  </tr>
              </tfoot>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Lorem ipsum dolor sit amet</td>
                      <td>Lorem ipsum dolor</td>
                      <td>consectetur adipiscing elit</td>
                      <td>eiusmod tempor incididunt</td>
                      <td>Elementum sagittis vitae</td>
                      <td>B</td>
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