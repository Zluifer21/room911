function update_confirm(id,access) {
swal({
  title: "¿are you sure?",
    type: "warning",
  showCancelButton: true,
  confirmButtonClass: "red",
  confirmButtonText: "Update",
  closeOnConfirm: true
},
function(){
  var access_room;
  if(access==0)
  {
    access_room=1;
  }else{
    access_room=0;
  }
    update_access_room(id,access_room);
});
}

function delete_confirm(id) {
swal({
  title: "¿are you sure?",
    type: "warning",
  showCancelButton: true,
  confirmButtonClass: "red",
  confirmButtonText: "Delete",
  closeOnConfirm: true
},
function(){
    delete_user(id);
});
}
