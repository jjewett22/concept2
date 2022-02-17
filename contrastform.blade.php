@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Review Info') }}</div>
                
                <div class="card-body">

                <div class="row mb-3">
                    <div class="col-md-3">
                    Patient Info:
                    </div>
                <div class="col-md-9">
                    
              {{$name}}
                </div>
                </div>
                

                <div class="row mb-3">
                    <div class="col-md-3">
                    BUN:
                    </div>
                <div class="col-md-9">
                    
              {{$bun}}
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        Creatinine:
                    </div>
                <div class="col-md-9">
                {{$creatinine}}
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        GFR:
                    </div>
                <div class="col-md-9">
                {{$gfr}}
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        GFR:
                    </div>
                <div class="col-md-9">
                {{$gfr}}
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        Contrast Type:
                    </div>
                    <div class="col-md-9">
                        {{$contrasttype}}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        Contrast Amount:
                    </div>
                    <div class="col-md-9">
                        {{$contrastamount}} ml
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        Contrast Reaction:
                    </div>
                    <div class="col-md-9">
                        {{$contrastreaction}} 
                    </div>
                </div>
                    
              Form completed and submitted by {{Auth::user()->name;}}
                </div>
                </div>
                <button type="" class="button btn btn-primary">Submit to PACS</button> 



              
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
