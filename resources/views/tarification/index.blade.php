@extends('layouts.app', ['activePage' => 'icons', 'title' => 'Light Bootstrap Dashboard Laravel by Creative Tim & UPDIVISION', 'navName' => 'Icons', 'activeButton' => 'laravel'])
@section('content')
   <div class="content">
     <div class="container-fluid">
           <div class="row">
            <div class="col-md-12">
               <div class="card">
                   <div class="card-header d-flex justify-content-between" >
                     <h4 class="caard-title">Liste des tarifications</h4>
                     <a href="{{route('tarification.create')}}">{{__('Ajouter tarification')}}</a>
                   </div>
                   <div class="card-body table-full-width table-responsive">
                      <table class="table table-hover table-striped">
                          <thead>
                              <th>#</th>
                              <th>Nom tarification</th>
                              <th>Montant</th>
                          </thead>
                          <tbody>
                              @foreach ($tarifications as $tarification)
                                  <tr>
                                    <td>{{$tarification->id}}</td>
                                    <td>{{$tarification->nom_tarification}}</td>
                                    <td>{{$tarification->montant}}</td>
                                    <td class="td-actions">
                                        <div class="d-flex justify-content-end">
                                            <a href="{{ route('tarification.show', $tarification->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                <i class="nc-icon nc-notes"></i>
                                            </a>
                                            <a href="{{route('tarification.edit',$tarification->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                <i class="nc-icon nc-layers-3"></i>
                                            </a>
                                            <form action="{{ route('tarification.destroy', $tarification->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" title="Supprimer" class="btn btn-danger delete-tarification-button">
                                                    <i class="nc-icon nc-simple-remove"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                   </div>
               </div>
         </div>
       </div>
     </div>
   </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('.delete-tarification-button').click(function(){
                if (confirm('Voulez-vous supprimer cette tarification?')){
                    $(this).closest('form').submit()
                }
            });
        });
    </script>
@endsection
