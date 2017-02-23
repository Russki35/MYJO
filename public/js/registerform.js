$(document).ready(function(){
    var registerForm = $("#registerForm");
    registerForm.submit(function(e){
        e.preventDefault();
        var formData = registerForm.serialize();
        $( '#register-errors-name' ).html( "" );
        $( '#register-errors-email' ).html( "" );
        $( '#register-errors-password' ).html( "" );
        $("#register-name").removeClass("has-error");
        $("#register-email").removeClass("has-error");
        $("#register-password").removeClass("has-error");

        $.ajax({
            url:registerForm.attr('action'),
            type:'POST',
            data:formData,
            success:function(data){
                console.log(data.responseText);
                $('#inscription').modal( 'hide' );
                location.reload(true);
            },
            error: function (data) {
                console.log(data.responseText);
                var obj = jQuery.parseJSON( data.responseText );
                if(obj.name){
                    $("#register-name").addClass("has-error");
                    $( '#register-errors-name' ).html( obj.name );
                }
                if(obj.email){
                    $("#register-email").addClass("has-error");
                    $( '#register-errors-email' ).html( obj.email );
                }
                if(obj.password){
                    $("#register-password").addClass("has-error");
                    $( '#register-errors-password' ).html( obj.password );
                }
            }
        });
    });
});