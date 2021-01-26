/*
* Show Users Script
*
*/
function editSuperAdminView(object){

}

function generateJSONeditSuperAdmin(id){

	$.ajax({
		dataType: 'json', 
		url: USER_SUPERADMIN_RESTROUTE+"/"+id+"/edit",
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

$(document).on("click","#editProfileButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

	adminID = $(this).data('admin-id');

	generateJSONeditSuperAdmin(adminID);

});