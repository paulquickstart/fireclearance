function updateUser(id, formData){

	console.log( USER_SUPERADMIN_RESTROUTE+id );

	$.ajax({
		dataType: 'json', 
		url: USER_SUPERADMIN_RESTROUTE+id,
		method: 'PUT',
		data : formData
	})
	.done(function(object) {
		if(object == true){		
			window.location.href = USER_SUPERADMIN_RESTROUTE;
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
* Update Users
*
*/
$(document).on("click","#updateUserButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
		
	userProfile = $("form#userProfile").serialize();

	console.log(userProfile);

	editProfileModal = $("#editProfileModal");

	adminID = editProfileModal.find('.userID').val();

	updateUser(adminID, userProfile);

});
