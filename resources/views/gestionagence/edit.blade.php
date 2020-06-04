@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
  <div class="content">
      <div class="container-fluid">
        <div class="col-md-12">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0">{{ __('Modifier agence') }}</h3>
                    </div>
                </div>
            </div>
              <div class="card-header">
                 <form action="{{route('agence.update', $agence)}}" method="POST">
                     @csrf
                     @method('PUT')
                     <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Nom')}}</label>
                     <input type="text" id="formGroupExampleInput" class="form-control" name="nom_agence" value="{{$agence->nom_agence}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Pays')}}</label>
                    <input type="text" id="formGroupExampleInput" class="form-control" name="pays" value="{{$agence->pays}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Ville')}}</label>
                    <input type="text" id="formGroupExampleInput" class="form-control" name="ville" value="{{$agence->ville}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Email')}}</label>
                    <input type="text" id="formGroupExampleInput" class="form-control" name="email" value="{{$agence->email_agence}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Adresse')}}</label>
                    <input type="text" id="formGroupExampleInput" class="form-control" name="adresse" value="{{$agence->adresse_agence}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Code postal')}}</label>
                    <input type="text" id="formGroupExampleInput" class="form-control" name="code_postal" value="{{$agence->code_postal}}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Telephone')}}</label>
                    <input type="number" id="formGroupExampleInput" class="form-control" name="telephone" value="{{$agence->telephone}}">
                    </div>
                    <button type="submit" class="btn btn-warning">Enregistrer</button>
                 </form>
              </div>
      </div>
  </div>
    
@endsection