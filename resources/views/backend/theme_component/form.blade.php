@extends('backend.layout.main-layout')
@section('page-style')
    {{ Html::style('assets/global/plugins/select2/select2.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}
    {{ Html::style('assets/global/plugins/jquery-minicolors/jquery.minicolors.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}
    {{ Html::style('assets/global/plugins/typeahead/typeahead.css') }}
    {{ Html::style('assets/global/plugins/jquery-tags-input/jquery.tagsinput.css') }}
    {{ Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}
@endsection
@section('more-style')
@endsection

@section('page-title','Form Component')

@section('page-content')
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="javascript:;" class="form-horizontal">
                    <div class="form-body">
                        <h4 class="font-green-sharp bold uppercase">Default Input Box</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email Address</label>
                            <div class="col-md-4">
                                <div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
												</span>
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Occupation</label>
                            <div class="col-md-4">
                                <input name="occupation" type="text" class="form-control"/>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Input MaxLength</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Input MaxLength</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="maxlength_defaultconfig">
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Input Tags</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Input Tags</label>
                            <div class="col-md-4">
                                <input id="tags_1" type="text" class="form-control tags" value="foo,bar,baz,roffle"/>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Auto Complete (typehead.js)</h4>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Basic Auto Complete</label>
                            <div class="col-sm-4">
                                <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-user"></i>
											</span>
                                    <input type="text" id="typeahead_example_1" name="typeahead_example_1" class="form-control"/>
                                </div>
                                <p class="help-block">
                                    E.g: metronic, keenthemes.<br>
											<span class="label label-success label-sm">
											Learn more: </span>
                                    <a target="_blank" href="http://twitter.github.io/typeahead.js/">
                                        http://twitter.github.io/typeahead.js/ </a>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Country Auto Complete</label>
                            <div class="col-sm-4">
                                <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-search"></i>
											</span>
                                    <input type="text" id="typeahead_example_2" name="typeahead_example_2" class="form-control"/>
                                </div>
                                <p class="help-block">
                                    E.g: USA, Malaysia. Prefetch from JSON source</code>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Custom Template</label>
                            <div class="col-sm-4">
                                <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-cogs"></i>
											</span>
                                    <input type="text" id="typeahead_example_3" name="typeahead_example_3" class="form-control"/>
                                </div>
                                <p class="help-block">
                                    Uses a precompiled template to customize look of suggestion.</code>
                                </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-3 control-label">Multiple Sections with Headers</label>
                            <div class="col-sm-4">
                                <div class="input-group">
											<span class="input-group-addon">
											<i class="fa fa-check"></i>
											</span>
                                    <input type="text" id="typeahead_example_4" name="typeahead_example_4" class="form-control"/>
                                </div>
                                <p class="help-block">
                                    Two datasets that are prefetched, stored, and searched on the client. Highlighting is enabled.
                                </p>
                            </div>
                        </div>

                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Form Tools</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Google reCaptcha</label>
                            <div class="col-md-9">
                                <!-- BEGIN REPCAPTCHA -->
                                <div id="recaptcha_widget" class="form-recaptcha">
                                    <div class="form-recaptcha-img" style="width: 325px">
                                        <a id="recaptcha_image" href="javascript:;">
                                        </a>
                                        <div class="recaptcha_only_if_incorrect_sol display-none" style="color:red">
                                            Incorrect please try again
                                        </div>
                                    </div>
                                    <div class="input-group" style="width: 325px">
                                        <input type="text" class="form-control" id="recaptcha_response_field" name="recaptcha_response_field">
                                        <div class="input-group-btn">
                                            <a class="btn default" href="javascript:Recaptcha.reload()">
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <a class="btn default recaptcha_only_if_image" href="javascript:Recaptcha.switch_type('audio')">
                                                <i title="Get an audio CAPTCHA" class="fa fa-headphones"></i>
                                            </a>
                                            <a class="btn default recaptcha_only_if_audio" href="javascript:Recaptcha.switch_type('image')">
                                                <i title="Get an image CAPTCHA" class="fa fa-picture-o"></i>
                                            </a>
                                            <a class="btn default" href="javascript:Recaptcha.showhelp()">
                                                <i class="fa fa-question-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <p class="help-block">
													<span class="recaptcha_only_if_image">
													Enter the words above </span>
													<span class="recaptcha_only_if_audio">
													Enter the numbers you hear </span>
                                    </p>
                                </div>
                                <!-- END REPCAPTCHA -->
                                <p class="help-block">
												<span class="label label-sm label-danger">
												Note: </span>
                                    Please visit <a href="http://www.google.com/recaptcha" target="_blank">
                                        http://www.google.com/recaptcha </a>
                                    to learn more about the Google reCaptcha
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username #1</label>
                            <div class="col-md-4">
                                <div class="input-group" style="text-align:left">
                                    <input type="text" class="form-control" name="username1" id="username1_input">
												<span class="input-group-btn">
												<a href="javascript:;" class="btn green" id="username1_checker">
                                                    <i class="fa fa-check"></i> Check </a>
												</span>
                                </div>
                                <div class="help-block">
                                    Type a username(E.g: user1, user2) and check its availability.
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username #2</label>
                            <div class="col-md-4">
                                <div class="input-icon right">
                                    <input type="text" class="form-control" name="username1" id="username2_input">
                                </div>
                                <div class="help-block">
                                    Type a username(E.g: user1, user2) and check its availability on focus lost
                                </div>
                            </div>
                        </div>
                        <div class="form-group last password-strength">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="password" id="password_strength">
											<span class="help-block">
											Type a password to check its strength </span>
                            </div>
                        </div>


                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Input TouchSpin</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 1</label>
                            <div class="col-md-9">
                                <div class="input-inline input-medium">
                                    <input id="touchspin_demo1" type="text" value="55" name="demo1" class="form-control">
                                </div>
											<span class="help-block">
											basic example </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Spinner 2</label>
                            <div class="col-md-9">
                                <div class="input-inline input-medium">
                                    <input id="touchspin_demo2" type="text" value="55" name="demo1" class="form-control">
                                </div>
											<span class="help-block">
											example with decimal steps </span>
                            </div>
                        </div>

                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Select Box</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Select</label>
                            <div class="col-md-4">
                                <select class="form-control" name="default_select">
                                    <option value="">Select...</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Select Group</label>
                            <div class="col-md-4">
                                <select class="form-control" name="default_select2">
                                    <option value="">Select...</option>
                                    <optgroup label="Group 1">
                                        <option value="Option 1">Option 1</option>
                                        <option value="Option 2">Option 2</option>
                                    </optgroup>
                                    <optgroup label="Group 2">
                                        <option value="Option 1">Option 3</option>
                                        <option value="Option 2">Option 4</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select2 Dropdown</label>
                            <div class="col-md-4">
                                <select class="form-control select2me" name="options2">
                                    <option value="">Select...</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Select2 Tags</label>
                            <div class="col-md-4">
                                <input type="hidden" class="form-control" id="select2_tags" value="" name="select2tags">
                                <span class="help-block">Select tags</span>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Date And Time Picker</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Datepicker</label>
                            <div class="col-md-4">
                                <input class="form-control date-picker" type="text" name="default_date" value="" data-date-format="yyyy-mm-dd" data-date-start-date="+0d" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Months Only</label>
                            <div class="col-md-4">
                                <input class="form-control date-picker" type="text" name="default_date2" value="" data-date="10/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months" />
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
                                <div class="input-group date form_datetime">
                                    <input type="text" size="16" readonly class="form-control">
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
                                <input type="text" id="hue-demo" class="form-control demo" data-control="hue" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Wheel</label>
                            <div class="col-md-4">
                                <input type="text" id="wheel-demo" class="form-control demo" data-control="wheel" value="">
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Checkboxs & Radios</h4>

                        <div class="form-group">
                            <label class="control-label col-md-3">Default Radio</label>
                            <div class="col-md-4">
                                <div class="radio-list" data-error-container="#form_2_membership_error">
                                    <label>
                                        <input type="radio" name="membership" value="1"/>
                                        Fee </label>
                                    <label>
                                        <input type="radio" name="membership" value="2"/>
                                        Professional </label>
                                </div>
                                <div id="form_2_membership_error">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Checkbox</label>
                            <div class="col-md-4">
                                <div class="checkbox-list" data-error-container="#form_2_services_error">
                                    <label>
                                        <input type="checkbox" value="1" name="service"/> Service 1 </label>
                                    <label>
                                        <input type="checkbox" value="2" name="service"/> Service 2 </label>
                                    <label>
                                        <input type="checkbox" value="3" name="service"/> Service 3 </label>
                                </div>
                                <span class="help-block">(select at least two)</span>
                                <div id="form_2_services_error">
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Checkboxes</label>
                            <div class="col-md-9">
                                <div class="md-checkbox-list">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox30" class="md-check">
                                        <label for="checkbox30">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-checkbox has-error">
                                        <input type="checkbox" id="checkbox31" class="md-check" checked>
                                        <label for="checkbox31">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-checkbox has-warning">
                                        <input type="checkbox" id="checkbox32" class="md-check">
                                        <label for="checkbox32">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Inline Checkboxes</label>
                            <div class="col-md-9">
                                <div class="md-checkbox-inline">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox33" class="md-check">
                                        <label for="checkbox33">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-checkbox has-error">
                                        <input type="checkbox" id="checkbox34" class="md-check" checked>
                                        <label for="checkbox34">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-checkbox has-info">
                                        <input type="checkbox" id="checkbox35" class="md-check">
                                        <label for="checkbox35">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Radios</label>
                            <div class="col-md-9">
                                <div class="md-radio-list">
                                    <div class="md-radio">
                                        <input type="radio" id="radio50" name="radio211" class="md-radiobtn">
                                        <label for="radio50">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-radio has-error">
                                        <input type="radio" id="radio51" name="radio211" class="md-radiobtn" checked>
                                        <label for="radio51">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-radio has-warning">
                                        <input type="radio" id="radio52" name="radio231" class="md-radiobtn">
                                        <label for="radio52">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label class="col-md-3 control-label" for="form_control_1">Inline Radios</label>
                            <div class="col-md-9">
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio53" name="radio2" class="md-radiobtn">
                                        <label for="radio53">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 1 </label>
                                    </div>
                                    <div class="md-radio has-error">
                                        <input type="radio" id="radio54" name="radio2" class="md-radiobtn" checked>
                                        <label for="radio54">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 2 </label>
                                    </div>
                                    <div class="md-radio has-warning">
                                        <input type="radio" id="radio55" name="radio2" class="md-radiobtn">
                                        <label for="radio55">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Option 3 </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Bootstrap Switch</h4>
                        <div class="form-group">
                            <label class="control-label col-md-3">Default Sizes</label>
                            <div class="col-md-9">
                                <input type="checkbox" checked class="make-switch" data-size="small">
                                <input type="checkbox" checked class="make-switch" data-size="normal">
                                <input type="checkbox" checked class="make-switch" data-size="large">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Colors</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" checked data-on-color="primary" data-off-color="info">
                                <input type="checkbox" class="make-switch" checked data-on-color="info" data-off-color="success">
                                <input type="checkbox" class="make-switch" checked data-on-color="success" data-off-color="warning">
                                <input type="checkbox" class="make-switch" checked data-on-color="warning" data-off-color="danger">
                                <input type="checkbox" class="make-switch" checked data-on-color="danger" data-off-color="default">
                                <input type="checkbox" class="make-switch" checked data-on-color="default" data-off-color="primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" data-on-text="Yes" data-off-text="No">
                                <input type="checkbox" class="make-switch" data-on-text="1" data-off-text="0">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">HTML Text</label>
                            <div class="col-md-9">
                                <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" class="make-switch" checked data-on-text="<i class='fa fa-user'></i>" data-off-text="<i class='fa fa-trash-o'></i>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">HTML Text Label Icon</label>
                            <div class="col-md-9">
                                <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-fullscreen" data-on-text="<i class='fa fa-check'></i>" data-off-text="<i class='fa fa-times'></i>"> <input type="checkbox" checked class="make-switch switch-large" data-label-icon="fa fa-youtube" data-on-text="<i class='fa fa-thumbs-up'></i>" data-off-text="<i class='fa fa-thumbs-down'></i>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Radio Group</label>
                            <div class="col-md-9">
                                <div class="margin-bottom-10">
                                    <label for="option1">Option 1</label>
                                    <input id="option1" type="radio" name="radio1" value="option1" class="make-switch switch-radio1">
                                </div>
                                <div class="margin-bottom-10">
                                    <label for="option2">Option 2</label>
                                    <input id="option2" type="radio" name="radio1" value="option2" class="make-switch switch-radio1">
                                </div>
                                <div class="margin-bottom-10">
                                    <label for="option3">Option 3</label>
                                    <input id="option3" type="radio" name="radio1" value="option3" class="make-switch switch-radio1">
                                </div>
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
                        <div class="form-group last">
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


                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Text Area and CKEditor</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Auto Size Textarea</label>
                            <div class="col-md-9">
                                <textarea class="form-control autosizeme" rows="4" placeholder="Autosizeme..." style="resize: vertical"></textarea>
                            </div>
                        </div>
                        <div class="form-group last">
                            <label class="control-label col-md-3">CKEditor</label>
                            <div class="col-md-9">
                                <textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
                                <div id="editor2_error">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h4 class="font-green-sharp bold uppercase">Bootstrap Select Splitter</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Select Splitter</label>
                            <div class="col-md-9">
                                <select id="select_selectsplitter1" class="form-control" size="4">
                                    <optgroup label="Category 1">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                        <option value="6">Option 6</option>
                                        <option value="7">Option 7</option>
                                        <option value="8">Option 8</option>
                                    </optgroup>
                                    <optgroup label="Category 2">
                                        <option value="9">Option 9</option>
                                        <option value="10">Option 10</option>
                                        <option value="11">Option 11</option>
                                        <option value="12">Option 12</option>
                                        <option value="13">Option 13</option>
                                        <option value="14">Option 14</option>
                                        <option value="15">Option 15</option>
                                        <option value="16">Option 16</option>
                                    </optgroup>
                                    <optgroup label="Category 3">
                                        <option value="17">Option 17</option>
                                        <option value="18">Option 18</option>
                                        <option value="19">Option 19</option>
                                        <option value="20">Option 20</option>
                                        <option value="21">Option 21</option>
                                    </optgroup>
                                </select>
                                <p class="help-block">
                                    click on the main option to list its child items
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
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

    {{ Html::script('assets/global/plugins/select2/select2.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}
    {{ Html::script('assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-selectsplitter/bootstrap-selectsplitter.min.js') }}
    {{ Html::script('assets/global/plugins/jquery-minicolors/jquery.minicolors.min.js') }}

    {{ Html::script('assets/global/plugins/autosize/autosize.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}

    {{ Html::script('assets/global/plugins/typeahead/handlebars.min.js') }}
    {{ Html::script('assets/global/plugins/typeahead/typeahead.bundle.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.min.js') }}

    {{ Html::script('assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}

    {{ Html::script('assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js') }}

    {{ Html::script('assets/global/plugins/ckeditor/ckeditor.js') }}
@endsection
@section('more-script')
    {{ Html::script('js/backend/theme_component/components-pickers.js') }}
    {{ Html::script('js/backend/theme_component/components-form-tools.js') }}
    {{ Html::script('js/backend/theme_component/components-form-tools2.js') }}
    {{ Html::script('js/backend/theme_component/validation.js') }}

    <script>
        FormValidation.init();
        ComponentsPickers.init();
        ComponentsFormTools.init();
        ComponentsFormTools2.init();
    </script>
    <!-- BEGIN GOOGLE RECAPTCHA -->
    <script type="text/javascript">
        var RecaptchaOptions = {
            theme : 'custom',
            custom_theme_widget: 'recaptcha_widget'
        };
    </script>
    <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LcrK9cSAAAAALEcjG9gTRPbeA0yAVsKd8sBpFpR"></script>
    <!-- END GOOGLE RECAPTCHA -->

@endsection