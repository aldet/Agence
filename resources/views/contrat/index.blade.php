@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des clients', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Liste des contrats</h4>
                            <a class="btn btn-primary" href="{{ route('contrat.create') }}">Créer un contrat</a>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>#</th>
                                <th>Date depart</th>
                                <th>Date retour prevu</th>
                                <th>Date retour</th>
                                <th>Agence retour</th>
                                <th>Prix journalier</th>
                                <th>Montant acompte</th>
                                <th>km depart</th>
                                </thead>
                                <tbody>
                                @foreach ($contrats as $contrat)
                                    <tr>
                                        <td>{{ $contrat->id }}</td>
                                        <td>{{ $contrat->date_depart }}</td>
                                        <td>{{ $contrat->date_retour_prevu }}</td>
                                        <td>{{ $contrat->date_retour}}</td>
                                        <td>{{ $contrat->montant_journalier}}</td>
                                        <td>{{ $contrat->montant_acompte}}</td>
                                        <td>{{ $contrat->km_depart}}</td>
                                        <td class="td-actions">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('contrat.show', $contrat->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                    <i class="nc-icon nc-notes"></i>
                                                </a>
                                                <a href="{{route('contrat.edit',$contrat->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                    <i class="nc-icon nc-layers-3"></i>
                                                </a>
                                                <form action="{{ route('contrat.destroy', $contrat->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" title="Supprimer" class="btn btn-danger delete-contrat-button">
                                                        <i class="nc-icon nc-simple-remove"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
            $('.delete-contrat-button').click(function(){
                if (confirm('Voulez-vous supprimer ce contrat?')){
                    $(this).closest('form').submit()
                }
            });
        });
    </script>
@endsection
