$(document).ready(function() {
 $("#form").on("hidden.bs.modal", function (ev) {
  $("#cancelar")[0].reset();
});

 $('#cantidad_1').on('change', function(){
  obtenerTotal($(this).val(),$('#precio_1').text(),$('#total1').val());
  subtotal(); 
});

 $('#cantidad_2').on('change', function(){
  obtenerTotal2($(this).val(),$('#precio_2').text(),$('#total2').val());
  subtotal();  
});

 $('#cantidad_3').on('change', function(){
  obtenerTotal3($(this).val(),$('#precio_3').text(),$('#total3').val());
  subtotal();  
});

 $('#cantidad_4').on('change', function(){
  obtenerTotal4($(this).val(),$('#precio_4').text(),$('#total4').val());
  subtotal();  
});

 $('#cantidad_5').on('change', function(){
  obtenerTotal5($(this).val(),$('#precio_5').text(),$('#total5').val());
  subtotal();  
});

 function obtenerTotal(cantidad,precio,total){
   total = cantidad * precio;
   $('#total1').html(total);
 }
 function obtenerTotal2(cantidad,precio,total){
   total = cantidad * precio;
   $('#total2').html(total);
 }
 function obtenerTotal3(cantidad,precio,total){
   total = cantidad * precio;
   $('#total3').html(total);
 }
 function obtenerTotal4(cantidad,precio,total){
   total = cantidad * precio;
   $('#total4').html(total);
 }
 function obtenerTotal5(cantidad,precio,total){
   total = cantidad * precio;
   $('#total5').html(total);
 }

 function subtotal(){
  var total1 =   $('#total1').text();
  var total2 =   $('#total2').text();
  var total3 =   $('#total3').text();
  var total4 =   $('#total4').text();
  var total5 =   $('#total5').text();
  var sub ;
  sub = parseFloat(total1) + parseFloat(total2) + parseFloat(total3) + parseFloat(total4) + parseFloat(total5);
  $('#subtotal').html(sub);
  var iva;
  iva = parseFloat(sub)*0.12;
  $('#iva').html(iva);
  var total;
  total = parseFloat(sub) + parseFloat(iva);
  $('#total').html(total);
}


$("#guardar").on("click", function(ev) {
  ev.preventDefault();
  /* Act on the event */
  if ($("#form").valid()) {
    $.ajax({
      url: 'rpc/insertar.php',
      type: 'post',
      data: {
        'subtotal': $('#subtotal').text(),
        'iva': $('#iva').text(),
        'total': $('#total').text()          
      }
    })
    .done(function(msg) {
      $("#mensaje").html(msg);
    })
    .fail(function(jHttp, textStatus, errorThrown) {
      $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
    })
    .always(function() {
      $("#form")[0].reset();
      console.log("complete");
    });
  }
});
});