(function($){
    /* scope */
    $('#frm_login').submit(function(ev){//agarra el formulario
        $.ajax({
            url:'login/validate',//agarra la funcion en el controlador
            type:'POST',//tipo de envio
            data:$(this).serialize(),//empaqueta lleva los datos del formulario
            success: function(data){
                var json= JSON.parse(data);
                console.log(json.email);//enviado al promt
                console.log(json.password);//enviando al promt
            },
            error: function(xhr){
                if(xhr.status==400){
                    $("#email > input").removeClass('is-invalid');
                    $("#password > input").removeClass('is-invalid');
                   var json=JSON.parse(xhr.responseText);
                   if(json.email.length !=0){
                       $("#email > div").html(json.email);
                       $("#email > input").addClass("is-invalid");
                   }
                   if(json.password.length !=0){
                    $("#password > div").html(json.password);
                    $("#password > input").addClass("is-invalid");
                }
                }
            },
            /* imprime y modifica el view */
        });
        ev.preventDefault();
    });
})(jQuery)