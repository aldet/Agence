
<div class="form-group {{$errors->has('categorie_vehicule') ? 'has-danger' : ''}}">
<label class="form-control-label" for="form_categorie_vehicule"><i class="w3-xxlarge fa fa-user"></i>{{__('Categorie')}}</label>
<input type="text" name="categorie_vehicue" id="form_categorie_vehicule" required class="form-control{{$errors->has('categorie_vehicule') ? 'has-danger' : ''}}" placeholder="{{__('Categorie')}}" value="{{$categorie->categorie_vehicule}}">
@include('alerts.feedback',['field' => 'categorie_vehicule'])
</div>