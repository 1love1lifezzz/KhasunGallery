$(function(){
    $('.maxlength').maxlength({
        alwaysShow: true,
        limitReachedClass: "label label-danger",
    });

    $('.input-tags').tagsInput({
        width: 'auto',
        'onAddTag': function () {
            //alert(1);
        }
    });

    $('.date-picker').datepicker({
        rtl: Metronic.isRTL(),
        orientation: "left",
        autoclose: true
    });
    //$('body').removeClass("modal-open"); // fix bug when inline picker is used in modal

    $(".date-time-picker").datetimepicker({
        autoclose: true,
        isRTL: Metronic.isRTL(),
        format: "dd MM yyyy - hh:ii",
        pickerPosition: (Metronic.isRTL() ? "bottom-right" : "bottom-left")
    });

    // handle input group button click
    $('.timepicker').parent('.input-group').on('click', '.input-group-btn', function(e){
        e.preventDefault();
        $(this).parent('.input-group').find('.timepicker').timepicker('showWidget');
    });

    $('.timepicker-24').timepicker({
        autoclose: true,
        minuteStep: 5,
        showSeconds: false,
        showMeridian: false
    });

    $('.colorpicker').minicolors({
        control: $(this).attr('data-control') || 'hue',
        defaultValue: $(this).attr('data-defaultValue') || '',
        inline: $(this).attr('data-inline') === 'true',
        letterCase: $(this).attr('data-letterCase') || 'lowercase',
        opacity: $(this).attr('data-opacity'),
        position: $(this).attr('data-position') || 'bottom left',
        change: function(hex, opacity) {
            if (!hex) return;
            if (opacity) hex += ', ' + opacity;
            if (typeof console === 'object') {
                console.log(hex);
            }
        },
        theme: 'bootstrap'
    });

    $(".select-tags").select2({
        tags: ["red", "green", "blue", "yellow", "pink","black"]
    });
    $(".touchspin").TouchSpin({
        buttondown_class: 'btn blue',
        buttonup_class: 'btn blue',
        min: 0,
        max: 100,
        step: 1,
        postfix: '%',
        prefix: '%'
    });


    // ------------------------------ For Validation
    //IMPORTANT: update CKEDITOR textarea with actual content before submit
    form.on('submit', function () {
        for (var instanceName in CKEDITOR.instances) {
            CKEDITOR.instances[instanceName].updateElement();
        }
    });

    var rules = {
        rules: {
            input_box: {
                required: true
            },
            select_box: {
                required: true
            },
            search_select: {
                required: true
            },
            select_tags: {
                required: true
            },
            default_date: {
                required: true
            },
            datepicker: {
                required: true
            },
            date_from: {
                required: true
            },
            date_to: {
                required: true
            },
            date_time: {
                required: true
            },
            timepicker: {
                required: true
            },
            colorpicker: {
                required: true
            },
            spinner: {
                required: true
            },
            'checkbox[]': {
                required: true,
                minlength: 2
            },
            'in_checkbox[]': {
                required: true
            },
            radio: {
                required: true
            },
            inline_radio: {
                required: true
            },
            textarea: {
                required: true
            },
            ckeditor: {
                required: true
            }
        },
        messages: { // custom messages for radio buttons and checkboxes

        }
    }
    var validationObj = $.extend (rules, themeRules);
    form.validate(validationObj);

});
