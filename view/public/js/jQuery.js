$(document).ready(function() {
    $('#nroHistorial').keypress(function(tecla){
      if(tecla.charCode < 48 || tecla.charCode > 57)
        return false;
    });   
});