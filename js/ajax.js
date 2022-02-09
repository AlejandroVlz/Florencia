function saludo(){

    email = $("#email").val();

    var parametros = {

        "email" : email,
        "btnenviar": "btnenviar"

    };

    $.ajax({
        data : parametros,
        url: 'agregar.php',
        type : 'POST',

        beforesend: function(){
            $('#mensaje_mostrar').html("mensaje antes de enviar");
        },

        success: function(mensaje){
            $('#mensaje_mostrar').html(mensaje);
        }
    });

}


function prueba(){
    alert("Hola");
}