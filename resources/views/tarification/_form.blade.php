<div class="form-group {{$errors->has('nom_tarification') ? 'has-danger' : ''}}">
    <label class="form-control-label" for="form_tarif_vehicule"><i class="w3-xxlarge fa fa-user"></i>{{__('Nom montant')}}</label>
    <input  type="text" id="form_tarif_vehicule" name="nom_tarification" required class="form-control {{$errors->has('nom_tarification') ? 'is-invalid' : ''}}" placeholder="{{__('nom_tarification')}}" value="{{$tarification->nom_tarification}}">
    @include('alerts.feedback',['field'=>'nom_tarification'])
</div>
<div class="form-group {{$errors->has('nomtant') ? 'has-danger' : ''}}">
    <label class="form-control-label" for="form_montant_vehicule"><i class="w3-xxlarge fa fa-user"></i>{{__(' Montant')}}</label>
    <input  type="text" id="form_montant_vehicule" name="montant" required class="form-control {{$errors->has('montant') ? 'is-invalid' : ''}}" placeholder="{{__('montant')}}" value="{{$tarification->montant}}">
    @include('alerts.feedback',['field'=>'montant'])
</div>