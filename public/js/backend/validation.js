var form = $('form');
var error3 = $('.alert-danger', form);
var success3 = $('.alert-success', form);
var themeRules = {
    errorElement: 'span', //default input error message container
    errorClass: 'help-block help-block-error', // default input error message class
    focusInvalid: false, // do not focus the last invalid input
    ignore: "", // validate all fields including form hidden input

    errorPlacement: function (error, element) { // render error placement for each input type
        if (element.parent(".input-group").size() > 0) {
            error.insertAfter(element.parent(".input-group"));
        } else if (element.attr("data-error-container")) {
            error.appendTo(element.attr("data-error-container"));
        } else if (element.parents('.md-checkbox-list').size() > 0) {
            // ------- For Checkbox
            error.appendTo(element.parents('.md-checkbox-list').attr("data-error-container"));
        } else if (element.parents('.md-checkbox-inline').size() > 0) {
            // ------- For Inline Checkbox
            error.appendTo(element.parents('.md-checkbox-inline').attr("data-error-container"));
        } else if (element.parents('.md-radio-list').size() > 0) {
            // ------- For Radio
            error.appendTo(element.parents('.md-radio-list').attr("data-error-container"));
        } else if (element.parents('.md-radio-inline').size() > 0) {
            // ------- For Radio Inline
            error.appendTo(element.parents('.md-radio-inline').attr("data-error-container"));
        } else {
            error.insertAfter(element); // for other inputs, just perform default behavior
        }
    },

    invalidHandler: function (event, validator) { //display error alert on form submit
        success3.hide();
        error3.show();
        Metronic.scrollTo(error3, -200);
    },

    highlight: function (element) { // hightlight error inputs
        $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
    },

    unhighlight: function (element) { // revert the change done by hightlight
        $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
    },

    success: function (label) {
        label.closest('.form-group').removeClass('has-error'); // set success class to the control group
    },

    submitHandler: function (form) {
        success3.show();
        error3.hide();
        form[0].submit(); // submit the form
    }

}
$('.select-default, .select2me, .select-tags, .date-picker .form-control, .date-time-picker .form-control, .colorpicker', form).change(function () {
    form.validate().element($(this));
});