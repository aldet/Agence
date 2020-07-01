<div class="form-group {{$errors->has('date_depart') ? 'has-danger':''}}">
<label class="form-control-label" for="form_date_depart"><i class="w3-xxlarge fa fa-user"></i>{{__('Date depart')}}</label>
<input  type="date" name="date_depart" id="form_date_depart" required class="form-control {{$errors->has('date_depart')? 'is-invalid': ''}}" placeholder="{{('Date de depart')}}" value="{{$contrat->date_depart}}">
@include('alerts.feedback',['field' => 'date_depart'])
</div>

<div class="form-group {{$errors->has('date_retour_prevu') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_date_retour_prevu"><i class="w3-xxlarge fa fa-user"></i>{{__('Date depar')}}</label>
    <input  type="date" name="date_retour_prevu" id="form_date_retour_prevu" required class="form-control {{$errors->has('date_retour_prevu')? 'is-invalid': ''}}" placeholder="{{('Date de retour prevu')}}" value="{{$contrat->date_retour_prevu}}">
    @include('alerts.feedback',['field' => 'date_retour_prevu'])
</div>

<div class="form-group {{$errors->has('date_retour') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_date_depart"><i class="w3-xxlarge fa fa-user"></i>{{__('Date retour')}}</label>
    <input  type="date" name="date_retour" id="form_date_retour" required class="form-control {{$errors->has('date_retour')? 'is-invalid': ''}}" placeholder="{{('Date de retour')}}" value="{{$contrat->date_retour}}">
    @include('alerts.feedback',['field' => 'date_retour'])
</div>

<div class="form-group {{$errors->has('agence_retour') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_agence_retour"><i class="w3-xxlarge fa fa-user"></i>{{__('Agence retour')}}</label>
    <input  type="text" name="agence_retour" id="form_agence_retour" required class="form-control {{$errors->has('agence_retour')? 'is-invalid': ''}}" placeholder="{{('Agence retour')}}" value="{{$contrat->agence_retour}}">
    @include('alerts.feedback',['field' => 'agence_retour'])
 </div>

 <div class="form-group {{$errors->has('montant_journalier') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_montant_journalier"><i class="w3-xxlarge fa fa-user"></i>{{__('Montant journalier')}}</label>
    <input  type="date" name="montant_journalier" id="form_montant_journalier" required class="form-control {{$errors->has('montant_journalier')? 'is-invalid': ''}}" placeholder="{{('Montant journalier')}}" value="{{$contrat->montant_journalier}}">
    @include('alerts.feedback',['field' => 'montant_journalier'])
 </div>
 <div class="form-group {{$errors->has('montant_acompte') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_montant_acompte"><i class="w3-xxlarge fa fa-user"></i>{{__('Montant acompte')}}</label>
    <input  type="text" name="montant_acompte" id="form_montant_acompte" required class="form-control {{$errors->has('montant_acompte')? 'is-invalid': ''}}" placeholder="{{('Montant acompte')}}" value="{{$contrat->montant_acompte}}">
    @include('alerts.feedback',['field' => 'montant_acompte'])
 </div>

 <div class="form-group {{$errors->has('km_depart') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_km_depart"><i class="w3-xxlarge fa fa-user"></i>{{__('km depart')}}</label>
    <input  type="text" name="km_depart" id="form_km_depart" required class="form-control {{$errors->has('km_depart')? 'is-invalid': ''}}" placeholder="{{('km depart')}}" value="{{$contrat->km_depart}}">
    @include('alerts.feedback',['field' => 'km_depart'])
 </div>
 
 
 