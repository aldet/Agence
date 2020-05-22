@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-beader">Liste des clients</div>
                    <div class="table-responsive table-full-width">
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
                                  <td>{{$client->id}}</td>
                                  <td>{{$client->nom_client}}</td>
                                  <td>{{$client->prenom}}</td>
                                  <td>{{$client->num_permis}}</td>
                                  <td>{{$client->pays}}</td>
                                  <td>{{$client->email}}</td>
                                  <td>{{$client->Telephone}}</td>
                                  </tr>         
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection