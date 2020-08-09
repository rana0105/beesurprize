@extends('backend.layouts.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="{{ route('sitesetting') }}">
                <i class="fas fa-backward"></i>
                </i>
                Back
            </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-3">
                <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <a aria-controls="v-pills-logo" aria-selected="true" class="nav-link active" data-toggle="pill" href="#v-pills-logo" id="v-pills-logo-tab" role="tab">
                        Site Logo
                    </a>
                    <a aria-controls="v-pills-contact" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-contact" id="v-pills-contact-tab" role="tab">
                        Contact Info
                    </a>
                    <a aria-controls="v-pills-messages" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-messages" id="v-pills-messages-tab" role="tab">
                        Messages
                    </a>
                    <a aria-controls="v-pills-settings" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-settings" id="v-pills-settings-tab" role="tab">
                        Settings
                    </a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div aria-labelledby="v-pills-logo-tab" class="tab-pane fade show active" id="v-pills-logo" role="tabpanel">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="inputTitle">
                                    Title
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputTitle" placeholder="Title" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="inputLogo">
                                    Logo
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputLogo" placeholder="Logo" type="file">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button class="btn btn-success" type="submit">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div aria-labelledby="v-pills-contact-tab" class="tab-pane fade" id="v-pills-contact" role="tabpanel">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="inputPhone">
                                    Phone No
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputPhone" placeholder="Phone No" type="text">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="inputEmail">
                                    Email
                                </label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                                    </input>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button class="btn btn-success" type="submit">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div aria-labelledby="v-pills-messages-tab" class="tab-pane fade" id="v-pills-messages" role="tabpanel">
                        ...
                    </div>
                    <div aria-labelledby="v-pills-settings-tab" class="tab-pane fade" id="v-pills-settings" role="tabpanel">
                        ...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
  @section('script')
<script>
</script>
@endsection
