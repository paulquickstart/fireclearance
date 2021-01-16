<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\Role;
use DB;

class UserController extends Controller
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
        //
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
     * Show the form for creating client registration.
     *
     * @return \Illuminate\Http\Response
     */
    public function registration(Request $request)
    {
        if ($request->isMethod('post')) {

            return DB::transaction(function () use ($request)
            {
                $user['username'] = $request->input('register-username');
                $user['email'] = $request->input('register-email');
                $user['password'] = bcrypt($request->input('register-password'));
                $user['user_type'] = User::CLIENT_TYPE;
  
                $user = User::create( $user );
                $user->roles()->attach( Role::find( Role::CLIENT['id'] ));

                $client['first_name'] = "welcome";
                $client['last_name'] = "client";
                $client = new Client($client);
                $user->client()->save($client);

                return redirect('login');
            }); 

        }

        return view('registration');
    }
}
