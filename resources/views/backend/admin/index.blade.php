<?php
$table = $obj_model->table;
$primaryKey = $obj_model->primaryKey;
$fillable = $obj_model->fillable;

$order_by = Input::get('order_by');
$sort_by = Input::get('sort_by');

$a_param = Input::all();
$str_param = $obj_fn->parameter($a_param);
$a_param_sort = Input::except(['order_by','sort_by']);
$str_param_sort = $obj_fn->parameter($a_param_sort);

?>
@extends('backend.layout.main-layout')

@section('page-style')
@endsection
@section('more-style')
@endsection

@section('page-title')
    {{ $page_title }}
@endsection
@section('page-content')
    <div class="col-md-12">
        <div class="portlet light">
            <div class="form-search">
                <form action="{{ url()->to($path) }}" class="form-horizontal" method="GET">
                    <div class="form-group">
                        <label class="control-label col-md-1">Search</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="search" value="{{ Input::get('search') }}">
                            <span class="help-block">Search by Firstname, Username and Role name</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-1 col-md-3 ">
                            <button class="btn blue btn-sm" type="submit"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
                <hr>
            </div>

            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-database font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold">Found {{ $count_data }} Record(s).</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center col-sm-1">{!! $obj_fn->sorting('ID',$primaryKey,$order_by,$sort_by,$str_param_sort,'') !!}</th>
                            <th>{!! $obj_fn->sorting('Name','firstname',$order_by,$sort_by,$str_param_sort,'') !!}</th>
                            <th>{!! $obj_fn->sorting('Username','username',$order_by,$sort_by,$str_param_sort,'') !!}</th>
                            <th>{!! $obj_fn->sorting('Role','role_name',$order_by,$sort_by,$str_param_sort,'') !!}</th>
                            <th class="text-center col-sm-2 col-md-2">
                                <a href="{{ url()->to($path.'/create') }}" class="btn btn-circle blue btn-xs"><i class="fa fa-plus"></i> Add</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($count_data > 0)
                                @foreach($data as $key => $field)
                                    <tr>
                                        <td class="text-center">{{ $field->$primaryKey }}</td>
                                        <td>{{ $field->firstname.' '.$field->lastname }}</td>
                                        <td>{{ $field->username }}</td>
                                        <td>{{ $field->role_name }}</td>
                                        <td class="text-center">
                                            <a href="{{ url()->to($path.'/'.$field->$primaryKey.'/edit?1'.$str_param) }}" class="btn btn-xs btn-circle green"><i class="fa fa-edit"></i></a>
                                            <form action="{{ url()->to($path.'/'.$field->$primaryKey) }}" class="form-delete" parent-data-id="{{ $field->$primaryKey }}" method="POST" >
                                                <input type="hidden" name="_method" value="delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="button" class="btn btn-xs btn-circle red btn-delete" data-id="{{ $field->$primaryKey }}"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td class="text-center" colspan="5">No Result.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                {!! $data->appends(Input::except('page'))->render() !!}
            </div>
        </div>
    </div>
@endsection

@section('page-plugin')
@endsection
@section('more-script')
@endsection