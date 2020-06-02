@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
   <div class="content">
      <div class="container-fluid">
          <div class="col-md-12">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-0">{{ __('Modifier client') }}</h3>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <form action="{{route('client.update',$client)}}" method="post">
                    @csrf
                    @method('PUT')
                    @if ($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <div class="alert alert-danger">{{ $err }}</div>
                            @endforeach
                        </div>
                    @endif

                  <button type="submit" class="btn btn-warning">Enregistrer</button>
                </form>
          </div>
      </div>
   </div>

@endsection
