@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CT Contrast Form') }}</div>

                <div class="card-body">
                    <form method="GET" action="contrastform">
                    
                        @csrf
                        <!--Name Input-->
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <select name="nameSelection" class="col-md-6 form-control @error('email') is-invalid @enderror" required>
                            <option name=""  disabled selected>Select Patient</option>
                            @foreach($patients as $patient)
                        
                            <option name="patientname"  value="
                            {{$patient ['name']}}  | MRN:{{$patient ['mrn']}} |  DOB:{{$patient ['dob']}}"  required placeholder="Select a Patient">{{$patient ['name']}}  | MRN:{{$patient ['mrn']}} |  DOB:{{$patient ['dob']}}
                    
                        </option>
                        
                        @endforeach
                            </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </select>
                            </div>
                        </div>
                        <!--BUN input-->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('BUN') }}</label>

                            <div class="col-md-6">
                                <input id="bun" type="float" class="form-control @error('email') is-invalid @enderror" name="bun" value="{{ old('email') }}" placeholder="Enter BUN value" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Creatinine input-->
                        <div class="row mb-3">
                            <label for="creatinine" class="col-md-4 col-form-label text-md-end">{{ __('Creatinine') }}</label>

                            <div class="col-md-6">
                                <input id="creatine" type="float" class="form-control @error('password') is-invalid @enderror" name="creatinine" placeholder="Enter Creatinine value"required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please enter creatinine</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--GFR-->
                        <div class="row mb-3">
                            <label for="GFR" class="col-md-4 col-form-label text-md-end">{{ __('GFR') }}</label>

                            <div class="col-md-6">
                                <input id="gfr" type="float" class="form-control @error('float') is-invalid @enderror" name="gfr"  value= "" placeholder="Enter GFR value" required >

                                @error('float')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            </div>
                        </div>
                        <!--Needle Gauge-->
                        <div class="row mb-3">
                            <label for="needlegauge" class="col-md-4 col-form-label text-md-end">{{ __('Needle Gauge') }}</label>

                            <div class="col-md-6">
                                <select id="needlegauge" placeholder="Select" class="form-control" name="needlegauge"requiredautocomplete="new-password">
                                
                                <option>18g Insite Catheter</option>
                                <option>20g Insite Catheter</option>
                                <option>22g Insite Catheter</option>
                                <option>Other</option>
                            </select>
                            </div>
                        </div>
                        <!--Contrast Type-->
                        <div class="row mb-3">
                            <label for="contrasttype" class="col-md-4 col-form-label text-md-end">{{ __('Contrast Type') }}</label>

                            <div class="col-md-6">
                                <select id="contrasttype" ß class="form-control" name="contrasttype"requiredautocomplete="new-password">
                                
                                <option>Omnipaque 350</option>
                                <option>Omnipaque 300</option>
                            </select>
                            </div>
                        </div>
                        <!--Contrast Amount input-->
                        <div class="row mb-3">
                            <label for="contrastamount" class="col-md-4 col-form-label text-md-end">{{ __('Contrast Amount in ml') }}</label>

                            <div class="col-md-6">
                                <input id="contrastamount" type="number" class="form-control @error('contrastamount') is-invalid @enderror" name="contrastamount" required >

                                @error('contrastamount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Please enter amount</strong>
                                    </span>
                                @enderror
                            </div>
                        <!--Contrast Reaction-->
                            <div class="row mb-3">
                            <label for="contrastreaction" class="col-md-4 col-form-label text-md-end">{{ __('Contrast Reaction?') }}</label>

                            <div class="col-md-6">
                                
                                <input type="radio" id="no" name="contrastreaction" required value="No">
                                <label for="no">No</label><br>
                                    <input type="radio" id="yes" name="contrastreaction" value="Yes">
                                    <label for="yes">Yes</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Submit-->
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
