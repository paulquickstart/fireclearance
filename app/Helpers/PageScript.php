<?php

use App\Role;

/*
* Control on Header link css
* 
*/
function header_style_sheets($request){

	echo $request."<br>";

	switch ($request) {

		case 'registration' :
			html_view("<link rel='stylesheet' type='text/css' href='".asset('css/core/menu/menu-types/vertical-menu.css')."' />");
			html_view("<link rel='stylesheet' type='text/css' href='".asset('css/plugins/forms/form-validation.css')."' />");
			html_view("<link rel='stylesheet' type='text/css' href='".asset('css/pages/page-auth.css')."' />");
			break;
		case 'user/client' : 
			html_view("<link rel='stylesheet' type='text/css' href='".asset('css/core/menu/menu-types/vertical-menu.css')."' />");
			break;
		default:
			# code...
			break;
			//  bootstrap-tagsinput.css
	}

}

function html_view($parameter)
{
	echo $parameter;
	return $parameter;
}