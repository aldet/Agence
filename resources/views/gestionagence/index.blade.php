@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
  <div class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                <div class="card-header">Liste agence</div>
                  <div class="table-responsive table-full-width">
                      <table class="table table-hover table-striped">
                          <thead>
                              <th>#</th>
                              <th>Nom</th>
                              <th>Pays</th>
                              <th>Ville</th>
                              <th>Email</th>
                              <th>Adresse</th>
                              <th>code postal</th>
                              <th>Telephone</th>
                          </thead>
                          <tbody>
                              @foreach ($agences as $agence)
                              <tr>
                              <td>{{$agence->id}}</td>
                              <td>{{$agence->nom_agence}}</td>
                              <td>{{$agence->pays}}</td>
                              <td>{{$agence->ville}}</td>
                              <td>{{$agence->email_agence}}</td>
                              <td>{{$agence->adresse_agence}}</td>
                              <td>{{$agence->code_postal}}</td>
                              <td>{{$agence->telephone}}</td>
                              <td><a href="{{route('agence.edit',$agence->id)}}"><button class="btn btn-primary">Editer</button></a>
                              <form action="{{route('agence.destroy',$agence->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Supprimer</button>
                              </form>
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