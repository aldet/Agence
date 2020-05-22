@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-beader">Liste des utilisateurs</div>
                    <div class="table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                   <td>{{$user->id}}</td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->email}}</td>
                
                                   <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</td>
                                   <td>
                                  @can('edit-users')
                                   <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-primary">Editer</button></a>
                                   @endcan
                                       <form action="{{route('admin.users.destroy',$user->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        @can('delete-users')
                                        <button class="btn btn-warning" type="submit">Supprimer</button>
                                        @endcan
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