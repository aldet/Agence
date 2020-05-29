@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section-image">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="row">

                <div class="card col-md-12">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="mb-0">{{ __('Ajouter un Client') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('ajoutClient')}}">
                            @csrf
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Nom') }}</label>
                                    <input type="text" name="nom" id="input-name" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('Prenom') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">
                                        <i class="w3-xxlarge fa fa-user"></i>{{ __('Prenom') }}
                                    </label>
                                    <input type="text" name="prenom" id="input-prenom" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="">

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-email"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Email') }}</label>
                                    <input type="email" name="email" id="input-email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-permis"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num permis') }}</label>
                                    <input type="text" name="permis" id="input-permis" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Num permis') }}" value="" >
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-telephone"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num télephone') }}</label>
                                    <input type="Number" name="telephone" id="input-telephone" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Num télephone') }}" value="" >
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-permis"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Pays') }}</label>
                                    <input type="text" name="pays" id="input-pays" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Pays') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-permis"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Code postal') }}</label>
                                    <input type="text" name="postal" id="input-ville" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Code postal') }}" value="">
    
                                    @include('alerts.feedback', ['field' => 'email'])
                                </div>
                               
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</div> 
@endsection