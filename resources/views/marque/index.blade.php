@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des clients', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
<div class="content">
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Liste des Marques</h4>
                    <a class="btn btn-primary" href="{{ route('marque.create') }}">Créer une marque</a>
                </div>
                   <div class="card-body table-full-width table-responsive">
                     <div class="table table-hover table-striped">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>#</th>
                                <th>Marque</th>
                            </thead>
                        <tbody>
                            @foreach ($marques as $marque)
                              <tr>
                                  <td>{{$marque->id}}</td>
                                  <td>{{$marque->marque_vehicule}}</td>
                                  <td class="td-actions">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('marque.show', $marque->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                            <i class="nc-icon nc-notes"></i>
                                        </a>
                                        <a href="{{route('marque.edit',$marque->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                            <i class="nc-icon nc-layers-3"></i>
                                        </a>
                                        <form action="{{ route('marque.destroy', $marque->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" title="Supprimer" class="btn btn-danger delete-marque-button">
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
</div>
    
@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('.delete-marque-button').click(function(){
                if (confirm('Voulez-vous supprimer cette marque?')){
                    $(this).closest('form').submit()
                }
            });
        });
    </script>
@endsection