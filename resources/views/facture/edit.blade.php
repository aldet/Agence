@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
       <div class="container-fluid">
          <div class="col-md-12">
            <form action="{{route('facture.update')}}" method="post">
                @csrf
                @method('PUT')
                  <div class="card">
                     <div class="card-header">
                        <div class="row align-items-center text-center">
                           <div class="col-md-8">
                              <h3 class="mb-0">{{('Modifier facture')}}</h3>
                           </div>
                        </div>
                     </div>
                        <div class="card-body">
                           @include('contrat._form',['action'=>route('facture.store'), 'method' =>'POST'])
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('facture.show')}}" class="btn btn-default">{{__('cancel')}}</a>
                            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                        </div>
                  </div>
            </form>
          </div>
       </div>
    </div>
@endsection