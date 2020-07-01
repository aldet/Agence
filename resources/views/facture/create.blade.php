@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
  <div class="content">
      <div class="container">
         <div class="row">
           <div class="col-md-12">
           <form action="{{route('facture.store')}}" method="POST">
             @csrf
               @method('POST')
                 <div class="card">
                   <div class="card-header">
                     <div class="row align-items-center">
                        <div class="col-md-8">
                           <h3 class="mb-0">{{__('Ajouter Facture')}}</h3>
                        </div>
                     </div>
                      <div class="card-body">
                         @include('facture._form',['action' => route('facture.store'),'method' =>'Post'])
                      </div>
                      <div class="card-footer text-center">
                        <a href="{{route('facture.store')}}" class="btn btn-default mr-4">{{('cancel')}}</a>
                      <button type="submit" class="btn btn-primary">{{('Save')}}</button>
                      </div>
                  </div>
               </div>
           </form> 
           </div>
         </div>
      </div>
  </div>  
@endsection