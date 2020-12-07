function validarFormulario(){

    var formulario = document.sentMessage;

    if(formulario.name.value == ""){
       document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Por favor ingrese nombre correctamente </div>';
       formulario.name.focus();
       return false;
    }else{
        document.getElementById("alerta").innerHTML = "";
    }

    if(formulario.email.value == ""){
       document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Por favor ingrese el email correctamente </div>';
       formulario.email.focus();
       return false;
    }else{
        document.getElementById("alerta").innerHTML = "";
    }

    // if(formulario.phone.value == ""){
    //     document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Por favor ingrese el telefono correctamente </div>';
    //     formulario.phone.focus();
    //     return false;
    //  }else{
    //      document.getElementById("alerta").innerHTML = "";
    //  }

     if(formulario.message.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Por favor ingrese el mensaje correctamente </div>';
        formulario.message.focus();
        return false;
     }else{
         document.getElementById("alerta").innerHTML = "";
     }
    
    formulario.submit();
    document.getElementById("alerta").innerHTML = '<div class="alert alert-success"><a href="" class="close" data-dismiss="alert">&times;</a> Por favor ingrese el mensaje correctamente </div>';


}