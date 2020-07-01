@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
       <div class="container">
           <div class="d d-flex">
                <a class="btn btn-default" href="{{ route('facture.index') }}">Liste des factures</a>
                <a class="btn btn-info ml-2" href="{{ route('facture.edit', $facture) }}">Modifier</a>
                <form action="{{ route('facture.destroy', $facture->id) }}" method="POST" class="ml-auto">
                    @csrf
                    @method('DELETE')
                    <button id="delete_facture" type="button" class="btn btn-danger">Supprimer</button>
                </form>
           </div>
           <div class="row">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="pb-5 pt-2 d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">{{ $facture->montant_facture}} {{ $facture->date_facture}}</h5>
                                <a class="card-subtitle mb-2 text-muted" href="{{ route('facture.edit', $facture) }}">Modifier</a>
                            </div>
                            <div class="big-profile-icon">
                                <i class="nc-icon nc-single-02"></i>
                            </div>
                        </div>
                        <div>Montant facture: {{ $facture->montant_facture}}</div>
                        <div>Date facture: {{ $facture->date_facture }}</div>                   
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
            $('#delete_facture').click(function(){
               if (confirm('Voulez-vous supprimer cette facture?')){
                   $(this).closest('form').submit()
               }
            });
        });
    </script>
@endsection