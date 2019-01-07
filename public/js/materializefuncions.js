$(document).ready(function(){
  $('.modal-trigger').click(function(){
  var url = $(this).attr("data-source");
  $( ".modal-content" ).html();
    modal_data(url);
    });
   $('.modal').modal();
   $('select').material_select();
 });
