@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
   <div class="content">
      <div class="container-fluid">
          <div class="col-md-12">
            <div class="card-header">Modifier client<strong></strong></div>
                <form action="{{route('client.update',$client)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Nom') }}</label>
                            <div class="col-md-12">
                                <input id="nom_client" type="text" class="form-controL"  name="nom_client" value="{{$client->nom_client}}" >
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Prenom') }}</label>
                            <div class="col-md-12">
                                <input id="prenom" type="text" class="form-controL"  name="prenom" value="{{$client->prenom}}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Email') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-controL"  name="email" value="{{$client->email}}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Num permis') }}</label>
                            <div class="col-md-12">
                                <input id="permis" type="text" class="form-controL"  name="permis" value="{{$client->num_permis}}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Num telephone') }}</label>
                            <div class="col-md-12">
                                <input id="telephone" type="text" class="form-controL"  name="telephone" value="{{$client->telephone}}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Pays') }}</label>
                            <div class="col-md-12">
                                <input id="pays" type="text" class="form-controL"  name="pays" value="{{$client->pays}}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('Code postal') }}</label>
                            <div class="col-md-12">
                                <input id="code_postal" type="text" class="form-controL"  name="code_postal" value="{{$client->code_postal}}">
                            </div>
                    </div>
                    <button type="submit" class="btn btn-warning">Enregistrer</button>
                </form>
          </div>
      </div>
   </div>
    
@endsection