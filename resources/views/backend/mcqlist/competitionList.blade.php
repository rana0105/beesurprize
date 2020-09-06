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
                          Question
                      </th>
                      <th>
                          Status
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
                          Question
                      </th>
                      <th>
                          Status
                      </th>
                  </tr>
              </tfoot>
              <tbody>
                @foreach($winnerlists as $winner)
                  <tr>
                      <td>1</td>
                      <td>{{ $winner->userList ? $winner->userList->name : ''}}</td>
                      <td>{{ $winner->userList ? $winner->userList->email : '' }}</td>
                      <td>{{ $winner->questionList ? $winner->questionList->question : '' }}</td>
                      <td>{{ $winner->status}}</td>
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