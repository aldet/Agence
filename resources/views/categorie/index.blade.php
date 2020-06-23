@extends('layouts.app', ['activePage' => 'table', 'title' => 'Liste des clients', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="content">
       <div class="container-fluid">
          <div class="row">
             <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Liste des categories</h4>
                        <a class="btn btn-primary" href="{{ route('categorie.create') }}">Créer une categorie</a>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <div class="table table-hover table-striped">
                            <table class="table table-hover table-striped">
                               <thead>
                                   <th>#</th>
                                   <th>Categorie</th>
                               </thead>
                               <tbody>
                                   @foreach ($categories as $categorie)
                                       <tr>
                                          <td>{{ $categorie->id }}</td>
                                          <td>{{ $categorie->nom_categorie }}</td>
                                          <td class="td-actions">
                                            <div class="d-flex justify-content-end">
                                                <a href="{{ route('categorie.show', $categorie->id) }}" rel="tooltip" title="Plus de détails" class="btn btn-info">
                                                    <i class="nc-icon nc-notes"></i>
                                                </a>
                                                <a href="{{route('categorie.edit',$categorie->id)}}" rel="tooltip" title="Modifier"  class="btn btn-success">
                                                    <i class="nc-icon nc-layers-3"></i>
                                                </a>
                                                <form action="{{ route('categorie.destroy', $categorie->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" title="Supprimer" class="btn btn-danger delete-categorie-button">
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
    $('.delete-categorie-button').click(function(){
        if (confirm('Voulez-vous supprimer cette categorie?')){
            $(this).closest('form').submit()
        }
    });
});
</script>
@endsection