@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des clients', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Liste des clients</h4>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Numero Permis</th>
                                <th>Pays</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                </thead>
                                <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }}</td>
                                        <td>{{ $client->nom_client }}</td>
                                        <td>{{ $client->prenom }}</td>
                                        <td>{{ $client->num_permis }}</td>
                                        <td>{{ $client->pays }}</td>
                                        <td>{{ $client->email }}</td>
                                        <td>{{ $client->Telephone }}</td>
                                        <td class="td-actions">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('client.show', $client->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                    <i class="nc-icon nc-notes"></i>
                                                </a>
                                                <a href="{{route('client.edit',$client->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                    <i class="nc-icon nc-layers-3"></i>
                                                </a>
                                                <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button href="#" rel="tooltip" title="Supprimer" class="btn btn-danger">
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
