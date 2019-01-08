$.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
$(document).on('submit', 'form#frm', function (event) {
        event.preventDefault();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: form.attr('method'),
            url: url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $('#modal1').modal('close');
                data_table();
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Error: " + errorThrown);
            }
        });
        return false;
});

$(document).on('submit', 'form#frm_access', function (event) {
        event.preventDefault();
        var form = $(this);
        var data = new FormData($(this)[0]);
        var url = form.attr("action");
        $.ajax({
            type: form.attr('method'),
            url: url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                $( "#access" ).html(data.message);

            },
            error: function (xhr, textStatus, errorThrown) {
                console.log("Error: " + errorThrown);
            }
        });
        return false;
});


function data_table() {
    $('#loading').show();
        $.ajax({
        type: "GET",
        url: 'employees',
        contentType: false,
        success: function (data) {
          $("#data_table").html(data.data);
            $('#loading').hide();
        },
        error: function (xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function update_access_room(id,access_room){
  let data = {"access_room":access_room}
  $.ajax({
  type: "PUT",
  url: 'employees/'+id,
  data:data,
  success: function (data) {
    data_table();
    console.log(data.url);
  },
  error: function (xhr, status, error) {
      alert(xhr.responseText);
  }
});
}

function delete_user(id){
  $.ajax({
  type: "delete",
  url: 'employees/'+id,
  success: function (data) {
    data_table();
    console.log(data.message);
  },
  error: function (xhr, status, error) {
      alert(xhr.responseText);
  }
});
}

function pagination(url){
  $.ajax({
  type: "get",
  url: url,
  success: function (data) {
    $("#data_table").html(data.data);

  },
  error: function (xhr, status, error) {
      alert(xhr.responseText);
  }
});
}

function modal_data(url)
{
$.ajax({
type: "get",
url: url,
success: function (data) {
  $( ".modal-content" ).html(data);
},
error: function (xhr, status, error) {
    alert(xhr.responseText);
}
});
}

$(document).on('click', '#filter', function()
{   var firstname = $("input[name='firstname']").val();
    var employed_id = $("input[name='employed_id']").val();
    var departament_id = $("select[name='departament_id']").val();
    var lastname = $("input[name='lastname']").val();
    let data = {"firstname":firstname,"employed_id":employed_id,"departament_id":departament_id,"lastname":lastname}
    $.ajax({
         url: 'filter',
         type: 'POST',
         data: data,
         success: function (data) {
          $('#loading').hide();
          console.log(data.data);
          $("#data_table").html(data.data);
        }, error: function(XMLHttpRequest, textStatus, errorThrown) {
         console.log("some error");
      }
    });
});
