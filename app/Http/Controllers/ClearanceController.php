<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clearance;
use App\User;
use DB;

class ClearanceController extends Controller
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
        return DB::transaction(function () use ($request)
        {
            $data['client_id'] = User::find( is_client() )->id;
            $data['project_owner'] = $request->input('pOwner');
            $data['project_title'] = $request->input('pTitle');
            $data['project_location'] = $request->input('pLocation');
            $data['owner_address'] = $request->input('pOwnerAddress');
            $data['contractor'] = $request->input('pContractor');
            $data['auth_representative'] = $request->input('pRepresentative');
            $data['contact_number'] = $request->input('pContactNo');
            $data['email'] = $request->input('pEmail');
            $data['total_floor_area'] = $request->input('pFloorArea');
            $data['no_of_storey'] = $request->input('pStorey');
            $data['fsec'] = Clearance::PENDING['id'];
            $data['fsic'] = Clearance::NOT_AVAILABLE['id'];
            $data['amount'] = 0;
            $data['province'] = $request->input('pProvince');
            $data['type_of_occupancy'] = $request->input('pTypeOfOccupancy');
            $data['region'] = $request->input('pRegion'); 
            $clearance = Clearance::create($data);

            if( $clearance ){
                return redirect('user/client');
            }

        }); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['clearance'] = Clearance::find( $id )->first();
        return view('clearance.show', $data );
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
