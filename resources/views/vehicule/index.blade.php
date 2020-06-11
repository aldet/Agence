@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des vehicules', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class="card-title">Liste des vehicules</h4>
                            <a class="btn btn-primary" href="{{ route('vehicule.create') }}">Ajouter vehicule</a>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Matriculation</th>
                                <th>kilometrage</th>
                                <th>Date achat</th>                        
                                </thead>
                                <tbody>
                                @foreach ($vehicules as $vehicule)
                                    <tr>
                                        <td>{{$vehicule->id}}</td>
                                        <td>{{$vehicule->nom}}</td>
                                        <td>{{$vehicule->num_matriculation}}</td>
                                        <td>{{$vehicule->km_compteur}}</td>
                                        <td>{{$vehicule->date_achat}}</td>
                                        <td class="td-actions">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('vehicule.show', $vehicule->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                    <i class="nc-icon nc-notes"></i>
                                                </a>
                                                <a href="{{route('vehicule.edit',$vehicule->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                    <i class="nc-icon nc-layers-3"></i>
                                                </a>
                                                <form action="{{ route('vehicule.destroy', $vehicule->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" title="Supprimer" class="btn btn-danger delete-vehicule-button">
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
            $('.delete-vehicule-button').click(function(){
                if (confirm('Voulez-vous supprimer ce vehicule?')){
                    $(this).closest('form').submit()
                }
            });
        });
    </script>
@endsection
