/*
* User Type Drop Down Script
*
*/
function laravelAjaxSetup(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
  });
  event.preventDefault();
}

$(document).on("change", "#userRole", function(){

 if( ADMIN == $(this).val() ){
    console.log("admin");

     if ($(this).data('options') === undefined) {
      // Taking an array of all options-2 and kind of embedding it on the select1
      $(this).data('options', $('#userType option').clone() );
    } 

    var id = ADMIN_TYPE;
    var options = $(this).data('options').filter('[value=' + id + ']');
    $('#userType').html(options);

  } else {

    if ($(this).data('options') === undefined) {
      // Taking an array of all options-2 and kind of embedding it on the select1
      $(this).data('options', $('#userType option').clone() );
    } 

    var id = $(this).val();
    var options = $(this).data('options').filter('[value=' + id + ']');
    $('#userType').html(options);

  }

});
