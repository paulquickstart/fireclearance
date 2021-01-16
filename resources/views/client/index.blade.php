@extends('layout.app')


@section('content')
   		
    <div class="row match-height">
        <div class="col-md-12 col-xl-6">
            <a href="#" class="card shadow-none bg-transparent border-primary clearance add-clearance" data-toggle="modal" data-target="#exampleModal">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68" height="68" viewBox="0 0 24 24" fill="none" stroke="#7367F0 " stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </div>
                <div>
                    <div class="clearance-header">Clearances</div>
                    <div class="clearance-title pb-1">Apply New</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae metus sem. </p>
                </div>
            </a>
        </div>
        <div class="col-md-12 col-xl-6">
            @if($clearance)
                <a href="{{ url('user/clearance/'.$clearance['id']) }}" class="card bg-primary text-white clearance">
                    <div class="px-2 pt-2 pb-0">
                        <div class="clearance-id"> {{ $clearance->id }} </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="clearance-title"> {{ $clearance->project_title }}  </div>
                                <div class="clearance-location"> {{ $clearance->project_location }} </div>
                            </div>
                            <div>
                                <div class="clearance-header">Payables</div>
                                <div class="clearance-payable"> {{ $clearance->amount }}  </div>
                            </div>
                        </div>
                    </div>                                       
                    <hr/>
                    <div class="px-2 pt-0 pb-2 d-flex">
                        <div><span class="font-weight-bold">FSEC</span> <span class="badge badge-pill badge-success ml-25"> {{  $clearance['fsec'] }}</span> </div>
                        <div class="ml-1"><span class="font-weight-bold">FSIC</span> <span class="badge badge-pill badge-secondary ml-25"> {{  $clearance['fsic'] }}</span> </div>
                    </div>             
                </a>
            @endif
        </div>
    </div>

@endsection