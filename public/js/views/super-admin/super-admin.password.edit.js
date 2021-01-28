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