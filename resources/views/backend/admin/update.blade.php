<?php
$table = $obj_model->table;
$primaryKey = $obj_model->primaryKey;
$fillable = $obj_model->fillable;

$a_param = Input::all();
$str_param = $obj_fn->parameter($a_param);

if(isset($data)) {
    foreach($fillable as $value){
        $$value = $data->$value;
    }
} else {
    foreach($fillable as $value){
        $$value = "";
    }
}
?>
@extends('backend.layout.main-layout')
@section('page-style')

@endsection
@section('more-style')
@endsection

@section('page-title')
    {{ $txt_manage.' '.$page_title }}
@endsection

@section('page-content')
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{ url()->to($url_to) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_method" value="{{ $method }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="str_param" value="{{ $str_param }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Role</label>
                            <div class="col-md-4">
                                <select class="form-control" name="admin_role_id">
                                    <option value="">Select Role</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->admin_role_id }}" @if($admin_role_id == $role->admin_role_id) selected @endif >{{ $role->role_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Firstname</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="firstname" value="{{ $firstname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Lastname</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="lastname" value="{{ $lastname }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-4">
                                @if($txt_manage == 'Add')
                                    <div class="input-group" style="text-align:left">
                                        <input type="text" class="form-control" name="username" id="username_input" value="{{ $username }}">
                                    <span class="input-group-btn">
                                    <a href="javascript:;" class="btn green" id="username_checker">
                                        <i class="fa fa-check"></i> Check </a>
                                    </span>
                                    </div>
                                @else
                                    <input type="text" class="form-control" name="username" value="{{ $username }}" readonly>
                                @endif

                            </div>
                        </div>
                        <div class="form-group last password-strength">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" name="password" id="password_strength">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green" @if($txt_manage == 'Add') disabled="disabled" @endif >{{ $txt_manage }}</button>
                                <button type="reset" class="btn default">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    </div>
@endsection
@section('page-plugin')
    {{ Html::script('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
    {{ Html::script('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js') }}
@endsection
@section('more-script')
    {{ Html::script('js/backend/validation.js') }}
    {{ Html::script('js/backend/admin.js') }}
@endsection