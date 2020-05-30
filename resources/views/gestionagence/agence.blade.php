@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="mb-0">{{ __('Nouvelle agence') }}</h3>
                        </div>
                    </div>
                </div>
                  <div class="card-header">
                  <form method="post" action="{{route('ajoutAgence')}}" >
                    @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Nom')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="nom_agence">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Pays')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="pays">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Ville')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="ville">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Email')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Adresse')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="adresse">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Code postal')}}</label>
                            <input type="text" id="formGroupExampleInput" class="form-control" name="code_postal">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput" class="col-md-6 col-form-label">{{_('Telephone')}}</label>
                            <input type="number" id="formGroupExampleInput" class="form-control" name="telephone">
                        </div>
                        <button type="submit" class="btn btn-warning">Enregistrer</button>
                    </form>
                  </div>
               </div>
            </div>
        </div>
    </div>   
@endsection