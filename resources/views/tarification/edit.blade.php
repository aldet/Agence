@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
       <div class="container-fluid">
            <div class="col-md-12">
            <form action="{{route('tarification.update',$tarification)}}" method="post">
                @csrf
                @method('PUT')
                <div class="card">
                       <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                   <h3 class="mb-0">{{__('Modifier tarification')}}</h3>
                                </div>
                            </div>
                       </div>
                    <div class="card-body">
                       @include('tarification._form',['action' => route('tarification.store'),'method'=>'POST'])
                    </div>
                        <div class="card-footer text-center">
                            <a href="{{route('tarification.show',$tarification)}}" class="btn btn-default mr-4">{{('cancel')}}</a>
                            <button type="submit" class="btn btn-primary">{{__('save')}}</button>
                        </div>
                  </div>
            </form>
         </div>
       </div>
    </div>
@endsection