@extends('backend.layout.main-layout')
@section('page-style')
    {{ Html::style('assets/global/plugins/jquery-tags-input/jquery.tagsinput.css') }}
    {{ Html::style('assets/global/plugins/select2/select2.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}
    {{ Html::style('assets/global/plugins/jquery-minicolors/jquery.minicolors.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}

@endsection
@section('more-style')
@endsection

@section('page-title')
    Sample Form Validate
@endsection

@section('page-content')

    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-body">
                        <h4 class="font-green-sharp bold uppercase">Input Box</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Input Box</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control maxlength" name="input_box" value="" maxlength="255" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Input Tags</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control tags input-tags" name="input_tags" value="" data-error-container="#error-input-tags">
                                <div id="error-input-tags"></div>
                            </div>
                        </div>



                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Select Box</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Select</label>
                            <div class="col-md-4">
                                <select class="form-control select-default" name="select_box">
                                    <option value="">Select...</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Search Select</label>
                            <div class="col-md-4">
                                <select class="form-control select2me" name="search_select">
                                    <option value="">Select...</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select Tags</label>
                            <div class="col-md-4">
                                <input type="hidden" class="form-control select-tags" value="" name="select_tags">
                            </div>
                        </div>



                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Date And Time Picker</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Datepicker</label>
                            <div class="col-md-4">
                                <input class="form-control date-picker" type="text" name="default_date" value="" data-date-format="yyyy-mm-dd" data-date-start-date="+0d"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Datepicker</label>
                            <div class="col-md-4">
                                <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                                    <input type="text" class="form-control" readonly name="datepicker">
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date Range</label>
                            <div class="col-md-4">
                                <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                    <input type="text" class="form-control" name="date_from">
												<span class="input-group-addon">
												to </span>
                                    <input type="text" class="form-control" name="date_to">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Datetimepicker</label>
                            <div class="col-md-4">
                                <div class="input-group date date-time-picker">
                                    <input type="text" size="16" readonly class="form-control" name="date_time">
												<span class="input-group-btn">
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">24hr Timepicker</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control timepicker timepicker-24" name="timepicker">
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-clock-o"></i></button>
												</span>
                                </div>
                            </div>
                        </div>


                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Color Picker</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Hue (default)</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control colorpicker" data-control="hue" name="colorpicker" value="">
                        </div>
                        </div>

                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Input TouchSpin</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner</label>
                            <div class="col-md-9">
                                <div class="input-inline input-medium">
                                    <input class="form-control touchspin" type="text" value="" name="spinner">
                                </div>
                            </div>
                        </div>

                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Checkboxs & Radios</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Checkboxes</label>
                            <div class="col-md-9">
                                <div class="md-checkbox-list" data-error-container="#checkboxs">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check" name="checkbox[]" value="1">
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox2" class="md-check" name="checkbox[]" value="2">
                                        <label for="checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox3" class="md-check" name="checkbox[]" value="3">
                                        <label for="checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                                <span class="help-block">(select at least two)</span>
                                <div id="checkboxs"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Inline Checkboxes</label>
                            <div class="col-md-9">
                                <div class="md-checkbox-inline" data-error-container="#in-checkbox">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="in-checkbox1" class="md-check" name="in_checkbox[]">
                                        <label for="in-checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="in-checkbox2" class="md-check" name="in_checkbox[]">
                                        <label for="in-checkbox2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="in-checkbox3" class="md-check" name="in_checkbox[]">
                                        <label for="in-checkbox3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                                <div id="in-checkbox"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Radios</label>
                            <div class="col-md-9">
                                <div class="md-radio-list" data-error-container="#radio">
                                    <div class="md-radio">
                                        <input type="radio" id="radio1" name="radio" class="md-radiobtn">
                                        <label for="radio1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio2" name="radio" class="md-radiobtn">
                                        <label for="radio2">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio3" name="radio" class="md-radiobtn">
                                        <label for="radio3">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                                <div id="radio"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Inline Radios</label>
                            <div class="col-md-9">
                                <div class="md-radio-inline" data-error-container="#inline-radio">
                                    <div class="md-radio">
                                        <input type="radio" id="radio53" name="inline_radio" class="md-radiobtn">
                                        <label for="radio53">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio54" name="inline_radio" class="md-radiobtn">
                                        <label for="radio54">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio55" name="inline_radio" class="md-radiobtn">
                                        <label for="radio55">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                                <div id="inline-radio"></div>
                            </div>
                        </div>


                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Text Area and CKEditor</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Auto Size Textarea</label>
                            <div class="col-md-9">
                                <textarea class="form-control autosizeme" rows="4" placeholder="Autosizeme..." style="resize: vertical" name="textarea"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">CKEditor</label>
                            <div class="col-md-9">
                                <textarea class=" form-control ckeditor" name="ckeditor" rows="6" data-error-container="#ckeditor_error"></textarea>
                                <div id="ckeditor_error"></div>
                            </div>
                        </div>

                        <hr>
                        <h4 class="font-green-sharp bold uppercase">File Input</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="input-group input-large">
                                        <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                            <i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
														</span>
                                        </div>
													<span class="input-group-addon btn default btn-file">
													<span class="fileinput-new">
													Select file </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="...">
													</span>
                                        <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Image Upload #2</label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""/>
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
                                    </div>
                                    <div>
                                        <span class="btn default btn-file">
                                        <span class="fileinput-new">
                                        Select image </span>
                                        <span class="fileinput-exists">
                                        Change </span>
                                        <input type="file" name="...">
                                        </span>
                                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                            Remove </a>
                                    </div>
                                </div>
                                <div class="clearfix margin-top-10">
												<span class="label label-danger">
												NOTE! </span>
                                    Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit Form</button>
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
    {{ Html::script('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}
    {{ Html::script('assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}
    {{ Html::script('assets/global/plugins/select2/select2.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}
    {{ Html::script('assets/global/plugins/jquery-minicolors/jquery.minicolors.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.min.js') }}
    {{ Html::script('assets/global/plugins/autosize/autosize.min.js') }}
    {{ Html::script('assets/global/plugins/ckeditor/ckeditor.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}
@endsection
@section('more-script')
    {{ Html::script('js/backend/validation.js') }}
    {{ Html::script('js/backend/default.js') }}
@endsection