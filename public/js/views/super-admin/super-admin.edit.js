/*
* Show Users Script
*
*/
function editSuperAdminView(object){
	console.log( "checking",object );

	var editProfileModal = $("#editProfileModal");

	var firstName = editProfileModal.find("#firstName").val( object.first_name );
	var lastName = editProfileModal.find("#lastName").val( object.last_name );
	var username = editProfileModal.find("#username").val( object.username );
	var email = editProfileModal.find("#email").val( object.email );

}

function generateJSONeditSuperAdmin(id){

	console.log(USER_SUPERADMIN_RESTROUTE+id+"/edit",)

	$.ajax({
		dataType: 'json', 
		url: USER_SUPERADMIN_RESTROUTE+id+"/edit",
		method: 'GET',
	})
	.done(function(object) {
		if(object){
			editSuperAdminView(object);
		}
	})
	.fail(function() {
		console.error("REST error. Nothing returned for AJAX.");
	})
	.always(function() {

	})

}

$(document).on("click",".editProfileButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

	userID = $(this).data('user-data-id');
	generateJSONeditSuperAdmin(userID);

});