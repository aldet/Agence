@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
      <div class="container-fluid">
        <div class="row">
           <div class="col-md-">
             <div class="card-header">Liste des vehicules</div>
             <div class="table-responsive table-full-width">
                 <table class="table table-hover table-striped ">
                   <thead>
                       <th>#</th>
                       <th>Nom</th>
                       <th>Matriculation</th>
                       <th>Kilometrage</th>
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
                                <td> <a href="{{route('vehicule.edit',$vehicule->id)}}"><button class="btn btn-primary">Editer</button></a>
                                    <form action="{{route('vehicule.destroy',$vehicule->id)}}" method="POST" class="d-inline">
                                      @csrf
                                      @method('DELETE')
                                      <button class="btn btn-warning" type="submit">Supprimer</button>
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
@endsection