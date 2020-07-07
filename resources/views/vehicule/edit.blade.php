@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">
                <form method="POST" action="{{ route('vehicule.update', $vehicule) }}">
                    @csrf
                    @method("PUT")
                     <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">{{ __('Modifier vehicule') }}</h3>
                                </div>
                            </div>
                         </div>
                            <div class="card-body">
                                @include('vehicule._form', ['action' => route('vehicule.store'), 'method' => 'POST'])
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ route('vehicule.show', $vehicule)}}" class="btn btn-default mr-4">{{ __('Cancel') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
@endsection
