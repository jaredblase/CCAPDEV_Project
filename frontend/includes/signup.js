$(document).ready(function () {
    const email = $("input[type='email']");
    const email_help = $('#email-help');
    const email_help_icon = $('#email-help-icon');

    const name = $("input[type='text']");
    const name_help = $('#name-help');
    const name_help_icon = $('#name-help-icon');

    const pw = $("input[type='password']");
    const pw_help = $('#pw-help');
    const pw_help_icon = $('#pw-help-icon');

    const tandc = $("input[type='checkbox']");
    const tandc_help = $('#tandc-help');


    $('#cancel-signup').on('click', function(event) {
        event.preventDefault();
        window.location.replace('index.html');
    });

    $('#submit-signup').on('click', function(event) {
        event.preventDefault();
    
        email.trigger('focusout');
        name.trigger('focusout');
        pw.trigger('focusout');

        if (!tandc.is(':checked')) {
            tandc_help.html('Must agree with terms and conditions first.');
        }

        let valid = email.hasClass('is-success') && name.hasClass('is-success') && pw.hasClass('is-success') && tandc.is(':checked');

        if (valid) {
            $('#signup-form').submit();
        }
    });

    email.on('focusout', function() {
        let help_text = isValidEmail(email.val());

        if (help_text === '') {
            updateInputFields(true, email, email_help, email_help_icon, 'Valid email address');
        } else {
            updateInputFields(false, email, email_help, email_help_icon, help_text);
        }
    });

    name.on('focusout', function() {
        let help_text = isValidUsername(name.val());

        if (help_text === '') {
            updateInputFields(true, name, name_help, name_help_icon, 'The username is available');
        } else {
            updateInputFields(false, name, name_help, name_help_icon, help_text);
        }
    });

    pw.on('focusout', function() {
        let help_text = isValidPassword(pw.val());

        if (help_text === '') {
            updateInputFields(true, pw, pw_help, pw_help_icon, 'Valid password');
        } else {
            updateInputFields(false, pw, pw_help, pw_help_icon, help_text);
        }
    });

    tandc.on('click', function() {
        tandc_help.html('');
    })
});