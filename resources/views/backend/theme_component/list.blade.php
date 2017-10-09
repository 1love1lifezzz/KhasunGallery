@extends('backend.layout.main-layout')

@section('page-style')
@endsection
@section('more-style')
@endsection

@section('page-title','List Page')

@section('page-content')
    <div class="col-md-12">
        <div class="portlet light">
            <div class="form-search">
                <form action="" class="form-horizontal" method="GET">
                    <div class="form-group">
                        <label class="control-label col-md-1">Search</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="search" value="">
                            <span class="help-block">Search by ....</span>
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
                    <span class="caption-subject font-green-sharp bold">Found 0 Record(s).</span>
                </div>
            </div>
            <div class="more-tools pull-right">
                <a href="#" class="btn btn-sm btn-circle grey-cascade">Export to excel</a>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center col-sm-1">ID.</th>
                            <th>Table heading</th>
                            <th>Table heading</th>
                            <th class="text-center col-sm-2 col-md-2">
                                <a href="#" class="btn btn-circle blue btn-xs"><i class="fa fa-plus"></i> Add</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-xs btn-circle green"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-circle red"><i class="fa  fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Table cell</td>
                                <td>Table cell</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-xs btn-circle green"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-xs btn-circle red"><i class="fa  fa-trash-o"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-plugin')
@endsection
@section('more-script')
@endsection