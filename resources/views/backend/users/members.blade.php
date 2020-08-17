@extends('backend.layouts.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="col-md-6">
            <h6 class="m-0 font-weight-bold text-success">
                Members List
            </h6>
        </div>
    </div>
    <div class="card-body">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>
                Whoops!
            </strong>
            There were some problems with your input.
            <br>
                <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </br>
            </br>
        </div>
        @endif
        <div class="table-responsive">
            <table cellspacing="0" class="table table-bordered custom-btn" id="dataTable" width="100%">
                <thead>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Date of Birth
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Language
                        </th>
                        <th>
                            Local Time
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
                            Date of Birth
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Language
                        </th>
                        <th>
                            Local Time
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
                    <tr>
                        <td>1</td>
                        <td>Sumrat</td>
                        <td>10-Jul-1988</td>
                        <td>0192737393</td>
                        <td>itsumrat@gmail.com</td>
                        <td>Badda, Dhaka</td>
                        <td>Bengali</td>
                        <td>(GMT-06:00)</td>
                        <td>Active</td>
                        <td>
                            <a class="admin-actionbtn" href="#">Reset Password
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', 1],'style'=>'display:inline']) !!}
                            <button class="admin-actionbtn" type="submit">
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
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 --}}  
<script>
    // $(document).ready(function() {
    //     $('#dataTable').DataTable( {
    //         dom: 'Bfrtip',
    //         buttons: [
    //             'csv', 'excel'
    //         ]
    //     } );
    // } );
    $(document).ready(function() {
        $('#dataTable').DataTable( {
            //lengthChange: false,
            buttons: [ 'csv', 'excel' ]
        } );
    } );
</script>
@endsection

