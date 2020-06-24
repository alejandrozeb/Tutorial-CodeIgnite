(function($){
    /* scope */
    $('#frm_login').submit(function(ev){//agarra el formulario
        ev.preventDefault();
        $.ajax({
            url:'login/validate',//agarra la funcion en el controlador
            type:'POST',//tipo de envio
            data:$(this).serialize(),//empaqueta lleva los datos del formulario
            success: function(data){
                var json= JSON.parse(data);
                console.log(json.email);
                console.log(json.password);
            },
            error: function(){

            }
        });

    });
})(jQuery)