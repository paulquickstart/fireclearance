

function deleteUser(userID){

	var token = $("meta[name='csrf-token']").attr("content");

	$.ajax({
		url: USER_SUPERADMIN_RESTROUTE+userID,
		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		method: "DELETE",
        data: {
            "id": userID,
            "_token": token,
        },
	})
	.done(function(object) {
		console.log(object);
		if(object==true){
			// window.location.href = USER_SUPERADMIN_RESTROUTE;
		}
	})
	.fail(function() {
		console.error("REST error. Nothing returned for AJAX.");
	})
	.always(function() {

	})

}

/*
* Append user ID
*
*/
$(document).on("click",".deleteUserRowButton", function(){

	userID = $(this).data('user-data-id');

	$(".userID").val( userID );

});

/*
* Delete User
*
*/
$(document).on("click","#deleteUserButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
		
	deleteUserModal = $("#deleteUserModal");

	userID = deleteUserModal.find('.userID').val();

	deleteUser(userID);

});
