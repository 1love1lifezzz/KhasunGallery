$(function(){
    // Username
    var input = $("#username_input");
    $("#username_input").keyup(function() {
        $('.btn[type=submit]').attr('disabled','disabled');
    });

    $("#username_checker").click(function (e) {
        var pop = $(this);
        if (input.val() === "") {
            input.closest('.form-group').removeClass('has-success').addClass('has-error');

            pop.popover('destroy');
            pop.popover({
                'placement': (Metronic.isRTL() ? 'left' : 'right'),
                'html': true,
                'container': 'body',
                'content': 'Please enter a username to check its availability.',
            });
            // add error class to the popover
            pop.data('bs.popover').tip().addClass('error');
            // set last poped popover to be closed on click(see Metronic.js => handlePopovers function)
            Metronic.setLastPopedPopover(pop);
            pop.popover('show');
            e.stopPropagation(); // prevent closing the popover
            return;
        }
        var btn = $(this);
        btn.attr('disabled', true);

        input.attr("readonly", true).
            attr("disabled", true).
            addClass("spinner");

        $.post(url+'/check-username', {
            'username' : input.val(),
            '_token' : _token
        }, function (res) {
            btn.attr('disabled', false);

            input.attr("readonly", false).
                attr("disabled", false).
                removeClass("spinner");

            if (res.status == 'OK') {
                $('.btn[type=submit]').removeAttr('disabled','');
                input.closest('.form-group').removeClass('has-error').addClass('has-success');

                pop.popover('destroy');
                pop.popover({
                    'html': true,
                    'placement': (Metronic.isRTL() ? 'left' : 'right'),
                    'container': 'body',
                    'content': res.message,
                });
                pop.popover('show');
                pop.data('bs.popover').tip().removeClass('error').addClass('success');


            } else {
                $('.btn[type=submit]').attr('disabled','disabled');
                input.closest('.form-group').removeClass('has-success').addClass('has-error');

                pop.popover('destroy');
                pop.popover({
                    'html': true,
                    'placement': (Metronic.isRTL() ? 'left' : 'right'),
                    'container': 'body',
                    'content': res.message,
                });
                pop.popover('show');
                pop.data('bs.popover').tip().removeClass('success').addClass('error');
                Metronic.setLastPopedPopover(pop);
            }

        }, 'json');

    });

    // Password
    var initialized = false;
    var input_pass = $("#password_strength");
    input_pass.keydown(function () {
        if (initialized === false) {
            // set base options
            input_pass.pwstrength({
                raisePower: 1.4,
                minChar: 4,
                verdicts: ["Weak", "Normal", "Medium", "Strong", "Very Strong"],
                scores: [17, 26, 40, 50, 60]
            });
            // add your own rule to calculate the password strength
            input_pass.pwstrength("addRule", "demoRule", function (options, word, score) {
                return word.match(/[a-z].[0-9]/) && score;
            }, 10, true);
            // set as initialized
            initialized = true;
        }
    });

    // ------------------------------ For Validation
    var rules = {
        rules: {
            admin_role_id: {
                required: true
            },
            firstname: {
                minlength: 2,
                required: true
            },
            lastname: {
                minlength: 2,
                required: true
            },
            username: {
                required: true
            },
            password:{
                minlength: 4,
                required: true
            }
        },
        messages: { // custom messages for radio buttons and checkboxes

        }
    }
    var validationObj = $.extend (rules, themeRules);
    form.validate(validationObj);
});