function generateJSONDelete(userID){


  var token = $("meta[name='csrf-token']").attr("content");

  $.ajax({
    url: USER_ADMIN_RESTROUTE+"/"+userID,
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    method: "DELETE",
        data: {
            "id": userID,
            "_token": token,
        },
  })
  .done(function(object) {
     console.log("link", object );
    if(object){
      console.log("link" );
      // window.location.href = USER_ADMIN_RESTROUTE;
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
  $(".deleteUserRowButton").click(function(){

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    var userID = $(this).data('user-data-id');

    console.log("hahaha", userID );

    $(".userID").val(userID);

  });

  $("#deleteUserButton").click(function(){
    laravelAjaxSetup();

    userID = $("#deleteUserModal").find('.userID').val();

    generateJSONDelete(userID);

  });

  
});




/*
* User View By ID
*/
// $( document ).ready(function() {
//   /** view / entry **/
//   viewUserProfileButton.click(function(){
//     laravelAjaxSetup();
//     var id = $(this).data('user-data-id');



//     // generateJSONfindUserInfo(id);
//   });

// });


