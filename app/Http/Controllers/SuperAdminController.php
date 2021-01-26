<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Admin;
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
        $users = User::with(['roles'])->get();
        $data = [ 'users' => $users ];
        return view('superadmin.index', $data );
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
        if ($request->isMethod('post')) {

            return DB::transaction(function () use ($request)
            {
                $user_id = is_user_logged_id();

                $user['username'] = $request->input('register-username');
                $user['email'] = $request->input('register-email');
                $user['password'] = bcrypt($request->input('register-password'));
                $user['user_type'] = $request->input('user-type');
                $user['created_by']  = $user_id;
                $user['updated_by']  = $user_id;

                $user = User::create($user);  
                $user->roles()->attach(Role::find( $request->input('user-role') ));

                $admin['first_name']  = "";
                $admin['last_name']   = "";
                $admin['created_by']  = $user_id;
                $admin['updated_by']  = $user_id;

                $admin = new Admin($admin);
                $result = $user->admins()->save($admin);

                return redirect('user/super-admin');
            }); 

        }

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
}
