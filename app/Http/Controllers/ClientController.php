<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clearance;
use App\Client;
use App\User;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $clearance= New Clearance();

        if($id){

            $data = self::latestClearance($id);
            if($data)
            {
                $clearance->id = $data->id;
                $clearance->project_title = $data->project_title;
                $clearance->project_location = $data->project_location;
                $clearance->amount = $data->amount;
                $clearance->fsec = $clearance->fSec( $data->fsec );
                $clearance->fsic = $clearance->fSec( $data->fsic );
            } else {
                $clearance = $data;
            }
        }
        $data['clearance']=$clearance;

        return view('client.index', $data );
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
        redirect('client');
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


    public function latestClearance($id)
    {
        $client = User::find($id)->client()->first();
        // $user = $client->user;
        // $user->username;
        $clearance = Client::find($client->id)->clearance()->first();

        if( $clearance !== null ){
            return $clearance;
        }
        return false;
    }
}
