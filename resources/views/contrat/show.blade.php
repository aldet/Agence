@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
       <div class="container">
           <div class="d d-flex">
                <a class="btn btn-default" href="{{ route('contrat.index') }}">Liste des contratq</a>
                <a class="btn btn-info ml-2" href="{{ route('contrat.edit', $contrat) }}">Modifier</a>
                <form action="{{ route('contrat.destroy', $contrat->id) }}" method="POST" class="ml-auto">
                    @csrf
                    @method('DELETE')
                    <button id="delete_contrat" type="button" class="btn btn-danger">Supprimer</button>
                </form>
           </div>
           <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="pb-5 pt-2 d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">{{ $contrat->date_depart }} {{ $contrat->date_retour }}</h5>
                                <a class="card-subtitle mb-2 text-muted" href="{{ route('contrat.edit', $contrat) }}">Modifier</a>
                            </div>
                            <div class="big-profile-icon">
                                <i class="nc-icon nc-single-02"></i>
                            </div>
                        </div>

                        <div>Date depart: {{ $contrat->date_depart }}</div>
                        <div>Date retour: {{ $contrat->date_retour }}</div>
                        <div>Mont journalier: {{ $contrat->montant_journalier}}</div>
                        <div>Montant acompte: {{ $contrat->montant_acompte}}</div>
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
            $('#delete_contrat').click(function(){
               if (confirm('Voulez-vous supprimer ce contrat?')){
                   $(this).closest('form').submit()
               }
            });
        });
    </script>
@endsection