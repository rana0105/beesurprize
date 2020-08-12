@extends('backend.layouts.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="col-md-6">
            <h6 class="m-0 font-weight-bold text-success">
                Winner List
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
                        <th>Image</th>
                        <th>Winner Name</th>
                        <th>
                            Prize
                        </th>
                        {{-- <th>
                            Prize of Month
                        </th> --}}
                        <th>
                            Contest No
                        </th>
                        <th>
                            Competition Title
                        </th>
                        <th>
                            Draw Date
                        </th>
                        <th>
                            Winner Number
                        </th>
                        {{-- <th>
                            Action
                        </th> --}}
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>
                            #
                        </th>
                        <th>Image</th>
                        <th>Winner Name</th>
                        <th>
                            Prize
                        </th>
                        {{-- <th>
                            Prize of Month
                        </th> --}}
                        <th>
                            Contest No
                        </th>
                        <th>
                            Competition Title
                        </th>
                        <th>
                            Draw Date
                        </th>
                        <th>
                            Winner Number
                        </th>
                        {{-- <th>
                            Action
                        </th> --}}
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('/backend/img/admin.png') }}" alt=""></td>
                        <td>Sumrat</td>
                        <td>Car</td>
                        {{-- <td>August</td> --}}
                        <td>B2T</td>
                        <td>The Breeze</td>
                        <td>12-Aug-2020</td>
                        <td>21354233</td>
                        {{-- <td>
                            <a class="admin-actionbtn" href="#">
                                <i class="far fa-edit fa-lg">
                                </i>
                            </a>
                            <a class="admin-actionbtn" href="#">Reset Password
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', 1],'style'=>'display:inline']) !!}
                            <button class="admin-actionbtn" type="submit">
                                <i class="fas fa-trash-alt fa-lg">
                                </i>
                            </button>
                            {!! Form::close() !!}
                        </td> --}}
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
