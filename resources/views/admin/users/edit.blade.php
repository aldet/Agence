@extends('layouts.app', ['activePage' => 'table', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Table List', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="card-header">Modifier <strong>{{$user->name}}</strong></div>
                <form action="{{route('admin.users.update',$user)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="email" class="col-md-6 col-form-label">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')?? $user->email}}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-6 col-form-label">{{ __('Nom') }}</label>

                        <div class="col-md-12">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')?? $user->name}}" required autocomplete="email" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                    </div>
               
                     @foreach ($roles as $role)
                         <div class="form-group col-md-12">
                            <input class="form-check-input" type="checkbox" name="roles[]" value="{{$role->id}}" id="{{$role->id}}"
                            @if ($user->roles->pluck('id')->contains($role->id)) checked @endif>
                            <label class="form-check-label" for="{{$role->id}}">{{$role->name}}</label>
                       </div>
                    @endforeach
                    <button class="btn btn-primary" type="submit">Modifier les roles</button>
                </form>
            </div>
        </div>
    </div>
@endsection