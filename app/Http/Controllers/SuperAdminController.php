<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Admin;
use App\Role;
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
        $data['users'] = User::with('roles')->get();
        return view('superadmin.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        switch ($user->user_type){
            case User::ADMIN_USER_TYPE['id'] : 

                $data['first_name'] = $user->admin->first_name;
                $data['last_name']  = $user->admin->last_name;
                break;

           case  User::CLIENT_USER_TYPE['id'] :
                $data['first_name'] = $user->client->first_name;
                $data['last_name']  = $user->client->last_name;
                break;
        }

        $data['username'] = $user->username;
        $data['email'] = $user->email;

        return response()->json($data);
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
 
            switch ($user->user_type){
                case User::ADMIN_USER_TYPE['id'] : 
                    
                    $user->admin->update( $request->only('first_name', 'last_name') );   
                    break;

               case  User::CLIENT_USER_TYPE['id'] :

                    $user->client->update( $request->only('first_name', 'last_name') );

                    break;
            }

           $result = $user->update( $request->only('username', 'email') ); 

           if($result){
                $result = true;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id)
    {
        return DB::transaction( function() use ($request, $id)
        {
            $user = User::find($id);
            $result = $user->password = bcrypt($request->input('password'));
            
           if($result){
                $result = true;
           }

            return response()->json($result);
        });
    }
}
    