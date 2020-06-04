@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-0">{{ __('Ajouter client') }}</h3>
                        </div>
                    </div>
                </div>
                    <div class="card-header">
                        <form method="POST" action="{{route('ajoutClient')}}">
                            @csrf
                                <div class="form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-user"></i>{{ __('Nom') }}</label>
                                    <input type="text" name="nom" id="formGroupExampleInput" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('Prenom') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput">
                                        <i class="w3-xxlarge fa fa-user"></i>{{ __('Prenom') }}
                                    </label>
                                    <input type="text" name="prenom" id="formGroupExampleInput" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="">

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Email') }}</label>
                                    <input type="email" name="email" id="formGroupExampleInput" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('permis') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num permis') }}</label>
                                    <input type="text" name="permis" id="formGroupExampleInput" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Num permis') }}" value="" >
    
                                    @include('alerts.feedback', ['field' => 'permis'])
                                </div>
                                <div class="form-group{{ $errors->has('telephone') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num télephone') }}</label>
                                    <input type="Number" name="telephone" id="formGroupExampleInput" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Num télephone') }}" value="" >
    
                                    @include('alerts.feedback', ['field' => 'telephone'])
                                </div>
                                <div class="form-group{{ $errors->has('pays') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Pays') }}</label>
                                    <input type="text" name="pays" id="formGroupExampleInput" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Pays') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'pays'])
                                </div>
                                <div class="form-group{{ $errors->has('postal') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Code postal') }}</label>
                                    <input type="text" name="postal" id="v" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Code postal') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'postal'])
                                </div>
                                <div class="form-group{{ $errors->has('agence_id') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="formGroupExampleInput"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Agence_id') }}</label>
                                    <input type="Number" name="agence_id" id="formGroupExampleInput" class="form-control{{ $errors->has('agence_id') ? ' is-invalid' : '' }}" placeholder="{{ __('Agence_id') }}" value="" >
    
                                    @include('alerts.feedback', ['field' => 'agence_id'])
                                </div>
                               
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
                                </div>        
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div> 
@endsection