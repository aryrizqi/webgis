$(document).ready(function(){

 $("#nm_kota").change(function(){
    var nm_kota = $("#nm_kota").val();

  $.ajax({
    url : base_url+"ajax/kd_kota",
    data  : 'nm_kota='+nm_kota,
    type  : 'POST',
    dataType: 'html',
    success : function(msg){
               $("#kd_tinggi").val(msg);
          }
  });
  });
});