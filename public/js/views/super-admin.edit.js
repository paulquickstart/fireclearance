/*
* User Show Profile
*
*/

function createUserInfoView(object){

  userID   = $("#userID").val(object.id);

  viewUserProfileModal.find('#username').val(object.username);
  viewUserProfileModal.find('#email').val(object.email);

  if(object.roles[offset].name == SUPER_ADMIN_ROLE['name'] || object.roles[offset].name == ADMIN_ROLE['name']){

    viewUserProfileModal.find('#firstName').val(object.admins.first_name);
    viewUserProfileModal.find('#lastName').val(object.admins.last_name);

  } else if( object.roles[offset].name == CLIENT_ROLE['name'] ) {

    viewUserProfileModal.find('#firstName').val(object.clients.first_name);
    viewUserProfileModal.find('#lastName').val(object.clients.last_name);

  }

}

function generateJSONfindUserInfo(id){

  $.ajax({
    dataType: 'json', 
    url: USER_ADMIN_RESTROUTE+"/"+id,
    method: 'GET',
  })
  .done(function(object) {
    if(object){
      console.log(object);
      createUserInfoView(object);
    }
  })
  .fail(function() {
    console.error("REST error. Nothing returned for AJAX.");
  })
  .always(function() {

  })

}

/*
* User View By ID
*/
$( document ).ready(function() {
  /** view / entry **/
  viewUserProfileButton.click(function(){
    laravelAjaxSetup();
    var id = $(this).data('user-data-id');
    generateJSONfindUserInfo(id);
  });

});