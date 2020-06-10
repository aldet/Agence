@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container">
            <div class="d-flex">
                <a class="btn btn-default" href="{{ route('vehicule.index') }}">Liste des vehicules</a>
                <a class="btn btn-info ml-2" href="{{ route('vehicule.edit', $vehicule) }}">Modifier</a>
                <form action="{{ route('vehicule.destroy', $vehcicule->id) }}" method="POST" class="ml-auto">
                    @csrf
                    @method('DELETE')
                    <button id="delete_vehicule" type="button" class="btn btn-danger">Supprimer</button>
                </form>

            </div>
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-5 pt-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">{{ $vehicule->nom }} {{ $vehicule->num_matriculation}}</h5>
                                    <a class="card-subtitle mb-2 text-muted" href="{{ route('vehicule.edit', $vehicule) }}">Modifier</a>
                                </div>
                                <div class="big-profile-icon">
                                    <i class="nc-icon nc-single-02"></i>
                                </div>
                            </div>

                            <div>Telephone: {{ $vehicule->nom }}</div>
                            <div>N° de matriculation: {{ $vehicule->num_matriculation}}</div>
                            <div>Date achat: {{ $vehicule->date_achat}}</div>
                            <div>Code postal: {{ $vehicule->carte_grise}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete_vehicule').click(function(){
               if (confirm('Voulez-vous supprimer ce vehicule?')){
                   $(this).closest('form').submit()
               }
            });
        });
    </script>
@endsection
