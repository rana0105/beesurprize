@extends('backend.layouts.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
          <a href="{{ route('createSetting') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
        </h6>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a aria-controls="pills-logo" aria-selected="true" class="nav-link active" data-toggle="pill" href="#pills-logo" id="pills-logo-tab" role="tab">
                    Site Logo
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="pills-contactinfo" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-contactinfo" id="pills-contactinfo-tab" role="tab">
                    Contact Info
                </a>
            </li>
            {{-- <li class="nav-item">
                <a aria-controls="pills-contact" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-contact" id="pills-contact-tab" role="tab">
                    Contact
                </a>
            </li> --}}
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div aria-labelledby="pills-logo-tab" class="tab-pane fade show active" id="pills-logo" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Title
                                </th>
                                <th>
                                    Logo
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
                                    Title
                                </th>
                                <th>
                                    Logo
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    {{ $permission->name }}
                                </td>
                                <td>
                                    {{ $permission->guard_name }}
                                </td>
                                <td>
                                    <a class="admin-actionbtn" href="{{ route('permissions.show',$permission->id) }}">
                                        <i aria-hidden="true" class="fa fa-eye fa-lg">
                                        </i>
                                    </a>
                                    @can('permission-edit')
                                    <a class="admin-actionbtn" href="{{ route('permissions.edit',$permission->id) }}">
                                        <i class="far fa-edit fa-lg">
                                        </i>
                                    </a>
                                    @endcan
                @can('permission-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    <button class="admin-actionbtn" type="submit">
                                        <i class="fas fa-trash-alt fa-lg">
                                        </i>
                                    </button>
                                    {!! Form::close() !!}
                @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div aria-labelledby="pills-contactinfo-tab" class="tab-pane fade" id="pills-contactinfo" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Email
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
                                    Phone
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    {{ $permission->name }}
                                </td>
                                <td>
                                    {{ $permission->guard_name }}
                                </td>
                                <td>
                                    <a class="admin-actionbtn" href="{{ route('permissions.show',$permission->id) }}">
                                        <i aria-hidden="true" class="fa fa-eye fa-lg">
                                        </i>
                                    </a>
                                    @can('permission-edit')
                                    <a class="admin-actionbtn" href="{{ route('permissions.edit',$permission->id) }}">
                                        <i class="far fa-edit fa-lg">
                                        </i>
                                    </a>
                                    @endcan
                @can('permission-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    <button class="admin-actionbtn" type="submit">
                                        <i class="fas fa-trash-alt fa-lg">
                                        </i>
                                    </button>
                                    {!! Form::close() !!}
                @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div aria-labelledby="pills-contact-tab" class="tab-pane fade" id="pills-contact" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Guard
                                </th>
                                <th>
                                    Create Date
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
                                    Guard
                                </th>
                                <th>
                                    Create Date
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                            <tr>
                                <td>
                                    {{ ++$key }}
                                </td>
                                <td>
                                    {{ $permission->name }}
                                </td>
                                <td>
                                    {{ $permission->guard_name }}
                                </td>
                                <td>
                                    {{ date('d-M-Y', strtotime($permission->created_at)) }}
                                </td>
                                <td>
                                    <a class="admin-actionbtn" href="{{ route('permissions.show',$permission->id) }}">
                                        <i aria-hidden="true" class="fa fa-eye fa-lg">
                                        </i>
                                    </a>
                                    @can('permission-edit')
                                    <a class="admin-actionbtn" href="{{ route('permissions.edit',$permission->id) }}">
                                        <i class="far fa-edit fa-lg">
                                        </i>
                                    </a>
                                    @endcan
                @can('permission-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                    <button class="admin-actionbtn" type="submit">
                                        <i class="fas fa-trash-alt fa-lg">
                                        </i>
                                    </button>
                                    {!! Form::close() !!}
                @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
  @section('script')
<script>
    $(document).ready(function() {
      $('#dataTablePermission').DataTable();
    });
</script>
@endsection
