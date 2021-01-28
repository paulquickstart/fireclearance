/*
* Get Id of the user
*
*/
$(document).on("click",".editPasswordButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

	userID = $(this).data('user-data-id');

	$(".userID").val( userID );

});


/*
* Update user password
*
*/
function updateUserPassword(id, formData){

	console.log( USER_SUPERADMIN_PASSWORD_RESTROUTE+id );

	$.ajax({
		dataType: 'json', 
		url: USER_SUPERADMIN_PASSWORD_RESTROUTE+id,
		method: 'PUT',
		data : formData
	})
	.done(function(object) {
		console.log( object );	
		if(object == true){		
			// window.location.href = USER_SUPERADMIN_RESTROUTE;
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
* Update Users Passwprd
*
*/
$(document).on("click","#updateUserPasswordButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
		
	userProfile = $("form#userProfile").serialize();

	editPasswordModal = $("#editPasswordModal");

	adminID = editPasswordModal.find('.userID').val();

	updateUserPassword(adminID, editPasswordModal);

});
