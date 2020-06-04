@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="pb-5 pt-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title">{{ $client->nom_client }}{{ $client->prenom }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                                </div>
                                <div class="big-profile-icon">
                                    <i class="nc-icon nc-single-02"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
