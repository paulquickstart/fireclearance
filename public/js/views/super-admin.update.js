/*
* User Show Profile
*
*/
function updateUserInfoProfile(id, formData){

  console.log( USER_ADMIN_RESTROUTE+"/"+id );

  $.ajax({
    dataType: 'json', 
    url: USER_ADMIN_RESTROUTE+"/"+id,
    method: 'PUT',
    data : formData
  })
  .done(function(object) {

    if(object == true){   
      window.location.href = USER_ADMIN_VIEWROUTE;
      console.log( object );      
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
  /** update **/
  updateProfileButton.click(function(){
    laravelAjaxSetup();

    formUserProfile = $("form#userProfile").serialize();

    userID = viewUserProfileModal.find('#userID').val();

    console.log( userID );

    updateUserInfoProfile(userID, formUserProfile)

  });
});