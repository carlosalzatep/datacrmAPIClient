
$('#loading').hide();

$(document).ready(function(){
    $("#boton").click(function(){
        $('#loading').show();
        $.ajax({url: "src/data.php", success: function(result){
            $('#loading').hide();
            $("#listaContactos").html(result);
        }});
    });
  });