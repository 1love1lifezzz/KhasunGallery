$(function(){
    // ------------------------------ For Validation
    var rules = {
        rules: {
            role_name: {
                required: true
            }
        },
        messages: { // custom messages for radio buttons and checkboxes

        }
    }
    var validationObj = $.extend (rules, themeRules);
    form.validate(validationObj);
});
