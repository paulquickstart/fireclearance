<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        return "testing";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       	$user = User::find($id);
       	$role_name = $user->roles->first()->name;

       	switch ( $role_name) {
       		case User::ROLE_SUPER_ADMIN :
       		case User::ROLE_ADMIN : 

	       		$user = User::with(['admins','roles']);
				$data = $user->findOrFail($id);

       			# code...
       			break;
       		case User::ROLE_CLIENT :

                $user = User::with(['clients','roles']);
                $data = $user->findOrFail($id);

       			# code...
       			break;
       	}

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    	return DB::transaction( function() use ($request, $id)
    	{
	      	$user = User::find($id);
	       	$role_name = $user->roles->first()->name;

	       	switch ( $role_name) {
	       		case User::ROLE_SUPER_ADMIN :
	       		case User::ROLE_ADMIN : 

	       			$first_name = $request->input('first_name');
	       			$last_name = $request->input('last_name');

	       			$fullname = $first_name." ".$last_name;

	       			$user 					= User::findOrFail($id);
					$user->username         = $request->input('username');
					$user->email            = $request->input('email');
					$user->name             = $fullname;
	       			$user->save();

        			$admin 					= $user->admins;
					$admin->first_name      = $first_name;
					$admin->last_name       = $last_name;
					$result 				= $admin->save();

					if($result){
						$result=true;
					}

	       			# code...
	       			break;
			       		case User::ROLE_CLIENT :

			       		$first_name = $request->input('first_name');
                        $last_name = $request->input('last_name');

                        $fullname = $first_name." ".$last_name;

                        $user                   = User::findOrFail($id);
                        $user->username         = $request->input('username');
                        $user->email            = $request->input('email');
                        $user->name             = $fullname;
                        $user->save();

                        $admin                  = $user->clients;
                        $admin->first_name      = $first_name;
                        $admin->last_name       = $last_name;
                        $result                 = $admin->save();

                        if($result){
                            $result=true;
                        }

	       			# code...
	       			break;
	       	}
	        return response()->json($result);
	    });
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // return DB::transaction(function () use ($id)
        // {
        //      $user = User::findOrFail($id);

        //     if ($user->admins->canDelete())
        //     {
        //         $result = $user->delete();
        //     }

        //     if($result){
        //         $result = true;
        //     }

        // });

        return DB::transaction(function () use ($id)
        {

            $user = User::find($id);
            $role_name = $user->roles->first()->name;

            switch ( $role_name) {
                case User::ROLE_SUPER_ADMIN :
                case User::ROLE_ADMIN : 

                    $user = User::findOrFail($id);
                    if ($user->admins->canDelete())
                    {
                        $result = $user->delete();
                    }

                    if($result){
                        $result = true;
                    }

                    # code...
                    break;
                        case User::ROLE_CLIENT :

                        $user = User::findOrFail($id);
                        if ($user->clients->canDelete())
                        {
                            $user->delete();
                        }

                         if($result){
                            $result = true;
                        }

                    # code...
                    break;
            }
            return response()->json($result);

        });

    }

    public function updatePassword(Request $request, $id){

        return DB::transaction( function() use ($request, $id)
        {
            $user                  = User::findOrFail($id);
            $user->password         = bcrypt($request->input('password'));
            $result                 = $user->save();

            if($result){
                $result=true;
            }

            return response()->json($result);
        });
    }
}
