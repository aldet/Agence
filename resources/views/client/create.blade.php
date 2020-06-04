@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="mb-0">{{ __('Ajouter client') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        @include('client._form', ['action' => route('client.store'), 'method' => 'POST'])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
