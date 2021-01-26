function updateUserPassword(id, formData){

  console.log(USER_ADMIN_PASSWORD_RESTROUTE+"/"+id);

   $.ajax({
    dataType: 'json', 
    url: USER_ADMIN_PASSWORD_RESTROUTE+"/"+id, 
    method: 'PUT',
    data : formData
  })
  .done(function(object) {
    console.log(object);
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
  editUserPasswordButton.click(function(){

    laravelAjaxSetup();
    var userID = $(this).data('user-data-id');
    $(".userID").val(userID);

  });

  updateUserPasswordButton.click(function(){
    formUserPassword = $("form#userPassword").serialize();
    userID = editUserPasswordModal.find('.userID').val();
    updateUserPassword(userID, formUserPassword)

  });

});




