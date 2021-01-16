@extends('layout.app')

@section('content')
	<div class="row ">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="card">              
                <div class="card-content">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Remarks</h4>
                            <div class="alert-body">
                                Tootsie roll lollipop lollipop icing. Wafer cookie danish macaroon. Liquorice fruitcake apple pie I love
                                cupcake cupcake.
                            </div>
                        </div>                      
                        <form>
                            <div class="row">
                                <div class="col-md-9  col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Project Title</label>
                                        <input type="text" class="form-control form-control-lg" id="readonlyInput" readonly="readonly" value="{{ $clearance->project_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Project Location</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->project_location }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Project Owner</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->project_owner }}">
                                    </div>
                                   
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Contact No.</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->contact_number }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Email Address</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Representative</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->auth_representative }}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Total Floor Area</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->total_floor_area }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">No. of Story</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->no_of_storey }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Type of Occupancy</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->type_of_occupancy }}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="disabledInput">Fire Station</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Province</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->province }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput">Region</label>
                                        <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="{{ $clearance->region }}">
                                    </div>
                                </div>
                            </div>                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection