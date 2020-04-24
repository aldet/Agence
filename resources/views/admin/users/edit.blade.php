@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="card-beader">Modifier<strong>{{$user->name}}</strong></div>
                <form action="{{route('admin.users.update',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                     @foreach ($roles as $role)
                         <div class="form-group">
            
                         <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="{{$role->id}}"
                             @if ($user->roles->pluck('id')->contains($role->id)) @endif >
                             <label class="form-check-label" for="{{$role->id}}">{{$role->name}}</label>
                       </div>
                    @endforeach
                    <button class="btn btn-primary" type="submit">Modifier les roles</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection