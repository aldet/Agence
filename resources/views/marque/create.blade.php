@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
 @section('content')
  <div class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
                <form action="{{route('marque.store')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">{{ __('Ajouter marque') }}</h3>
                                </div>
                           </div>
                       </div>
                          <div class="card-body">
                            @include('marque._form',['action' =>route('marque.store'),'method'=>'POST'])
                          </div>
                          <div class="card-footer text-center">
                            <a href="{{ route('marque.index') }}" class="btn btn-default mr-4">{{ __('Cancel') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
         </div>
      </div>
  </div>  
@endsection
