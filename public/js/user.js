/**
 * Created by Etudiant on 21/02/2017.
 */
var loginForm = $("#loginForm");
loginForm.submit(function(e) {

    e.preventDefault();

    var formData = loginForm.serialize();
    $('#form-errors-email').html("");
    $('#form-errors-password').html("");
    $('#form-login-errors').html("");
    $("#email-div").removeClass("has-error");
    $("#password-div").removeClass("has-error");
    $("#login-errors").removeClass("has-error");

    $.ajax({
        url: loginForm.attr('action'),
        type: 'POST',
        data: formData,
        success: function(data) {
            console.log(data.responseText);
            $('#connexion').modal('hide');
            location.reload(true);
        },
        error: function(data) {
            console.log(data.responseText);
            var obj = jQuery.parseJSON(data.responseText);
            if (obj.email) {
                $("#email-div").addClass("has-error");
                $('#form-errors-email').html(obj.email);
            }
            if (obj.password) {
                $("#password-div").addClass("has-error");
                $('#form-errors-password').html(obj.password);
            }
            if (obj.error) {
                $("#login-errors").addClass("has-error");
                $('#form-login-errors').html(obj.error);
            }
        }
    });
});