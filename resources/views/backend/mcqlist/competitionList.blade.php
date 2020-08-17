 @extends('backend.layouts.app')


@section('content')
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <div class="col-md-6">
          <h6 class="m-0 font-weight-bold text-success">
            Success Members
          </h6>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
          <table cellspacing="0" class="table table-bordered custom-btn" id="dataTable" width="100%">
              <thead>
                  <tr>
                      <th>
                          #
                      </th>
                      <th>Member Name</th>
                      <th>Email</th>
                      <th>
                          Contest Name
                      </th>
                      <th>
                          Contest No
                      </th>
                      <th>
                          Draw Date
                      </th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                      <th>
                          #
                      </th>
                      <th>Member Name</th>
                      <th>Email</th>
                      <th>
                          Contest Name
                      </th>
                      <th>
                          Contest No
                      </th>
                      <th>
                          Draw Date
                      </th>
                  </tr>
              </tfoot>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>Sumrat</td>
                      <td>sumrat@gmail.com</td>
                      <td>Contest is the game</td>
                      <td>MT20</td>
                      <td>12-Aug-2020</td>
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