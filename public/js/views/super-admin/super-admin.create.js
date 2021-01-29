
function createUser(formData){

	$.ajax({
		dataType: 'json', 
		url: USER_SUPERADMIN_RESTROUTE,
		method: 'POST',
		data : formData
	})
	.done(function(object) {
		console.log(object);
		if(object == true){		
			window.location.href = USER_SUPERADMIN_RESTROUTE;			
		}
	})
	.fail(function() {
		console.error("REST error. Nothing returned for AJAX.");
	})
	.always(function() {

	})

}

$(document).on("click","#addUserButton", function(){

	event.preventDefault();

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

	var userProfile = $("form#createUser").serialize();

	createUser(userProfile);

});


$("#roleUser").change(function(){

    var val = $(this).val();

    if( val == SUPER_ADMIN_ROLE['id'] ){

    	$("#userType").html("<option value='1'> Admin </option>");

    }else if( val == ADMIN_ROLE['id'] ){

    	$("#userType").html("<option value='1'> Admin </option>");

    }else if( val == CLIENT_ROLE['id'] ){

    	$("#userType").html("<option value='2'> Client </option>");

    }

});