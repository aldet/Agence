@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
   <div class="content">
      <div class="container-fluid">
          <div class="col-md-12">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0">{{ __('Modifier client') }}</h3>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <form action="{{route('client.update',$client)}}" method="post">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <div class="alert alert-danger">{{ $err }}</div>
                            @endforeach
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Nom') }}</label>
                        <input id="formGroupExampleInput" type="text" class="form-control"  name="nom_client" value="{{$client->nom_client}}" >               
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Prenom') }}</label>
                        <input id="formGroupExampleInput" type="text" class="form-control"  name="prenom" value="{{$client->prenom}}">                           
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Email') }}</label>
                        <input id="formGroupExampleInput" type="email" class="form-control"  name="email" value="{{$client->email}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Num permis') }}</label>
                        <input id="formGroupExampleInput" type="text" class="form-control"  name="permis" value="{{$client->num_permis}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Num telephone') }}</label>
                       <input id="formGroupExampleInput" type="text" class="form-control"  name="telephone" value="{{$client->telephone}}">       
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{ __('Pays') }}</label>
                        <input id="formGroupExampleInput" type="text" class="form-control"  name="pays" value="{{$client->pays}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{__('Code postal')}}</label>                 
                       <input id="formGroupExampleInput" type="text" class="form-control"  name="code_postal" value="{{$client->code_postal}}">
                    </div>   
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{__('Agence_id')}}</label>                 
                       <input id="formGroupExampleInput" type="number" class="form-control"  name="agence_id" value="{{$client->agence_id}}">
                    </div>         
                  <button type="submit" class="btn btn-warning">Enregistrer</button>
                </form>
          </div>
      </div>
   </div>
    
@endsection