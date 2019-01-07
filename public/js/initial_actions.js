$(document).ready(function(){
  $("#loading").hide();
  data_table();
  $('body').on('click', '.pagination a', function(e) {
             e.preventDefault();
             var url = $(this).attr('href');
             pagination(url);
         });
   });
