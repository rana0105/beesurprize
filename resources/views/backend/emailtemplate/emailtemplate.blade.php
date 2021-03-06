@extends('backend.layouts.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
          <a href="{{ route('createTemplate') }}"><i class="fa fa-plus" aria-hidden="true"></i>Add</a>
        </h6>
    </div>
    <div class="card-body">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a aria-controls="pills-logo" aria-selected="true" class="nav-link active" data-toggle="pill" href="#pills-logo" id="pills-logo-tab" role="tab">
                    New Signup
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="pills-contactinfo" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-contactinfo" id="pills-contactinfo-tab" role="tab">
                    Purchases
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="pills-about" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-about" id="pills-about-tab" role="tab">
                     Password Reset
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="pills-faq" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-faq" id="pills-faq-tab" role="tab">
                    News letter
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="pills-video" aria-selected="false" class="nav-link" data-toggle="pill" href="#pills-video" id="pills-video-tab" role="tab">
                    Winners
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div aria-labelledby="pills-logo-tab" class="tab-pane fade show active" id="pills-logo" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTableLogo" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Content
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
                                    Subject
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Why is the sky blue?</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</td>
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
            <div aria-labelledby="pills-contactinfo-tab" class="tab-pane fade" id="pills-contactinfo" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTableContact" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Content
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
                                    Subject
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Why is the sky blue?</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</td>
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
            <div aria-labelledby="pills-about-tab" class="tab-pane fade" id="pills-about" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Content
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
                                    Subject
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Why is the sky blue?</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</td>
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
            <div aria-labelledby="pills-faq-tab" class="tab-pane fade" id="pills-faq" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Content
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
                                    Subject
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Why is the sky blue?</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</td>
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
            <div aria-labelledby="pills-video-tab" class="tab-pane fade" id="pills-video" role="tabpanel">
                <div class="table-responsive">
                    <table cellspacing="0" class="table table-bordered custom-btn" id="dataTablePermission" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Content
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
                                    Subject
                                </th>
                                <th>
                                    Content
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Why is the sky blue?</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</td>
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
    </div>
</div>
@endsection
  @section('script')
<script>
    $(document).ready(function() {
      $('#dataTableLogo').DataTable();
      $('#dataTableContact').DataTable();
    });
</script>
@endsection
