@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des clients', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Liste des factures</h4>
                            <a class="btn btn-primary" href="{{ route('facture.create') }}">Créer une facture</a>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>#</th>
                                <th>Montant facture</th>
                                <th>Date facture</th>
                                </thead>
                                <tbody>
                                @foreach ($factures as $facture)
                                    <tr>
                                        <td>{{ $facture->id }}</td>
                                        <td>{{ $facture->montant_facture }}</td>
                                        <td>{{ $facture->date_date_facture }}</td>
                                        <td class="td-actions">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('facture.show', $facture->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                    <i class="nc-icon nc-notes"></i>
                                                </a>
                                                <a href="{{route('facture.edit',$facture->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                    <i class="nc-icon nc-layers-3"></i>
                                                </a>
                                                <form action="{{ route('facture.destroy', $contrat->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" title="Supprimer" class="btn btn-danger delete-facture-button">
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
            $('.delete-facture-button').click(function(){
                if (confirm('Voulez-vous supprimer cette facture?')){
                    $(this).closest('form').submit()
                }
            });
        });
    </script>
@endsection
