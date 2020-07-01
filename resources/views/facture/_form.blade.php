<div class="form-group {{$errors->has('date_facture') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_date_facture"><i class="w3-xxlarge fa fa-user"></i>{{__('Date facture')}}</label>
    <input  type="date" name="date_facture" id="form_date_facture" required class="form-control {{$errors->has('date_facture')? 'is-invalid': ''}}" placeholder="{{('Date facture')}}" value="{{$facture->date_facture}}">
    @include('alerts.feedback',['field' => 'date_facture'])
 </div>

 <div class="form-group {{$errors->has('montant_facture') ? 'has-danger':''}}">
    <label class="form-control-label" for="form_montant_facture"><i class="w3-xxlarge fa fa-user"></i>{{__('Montant facture')}}</label>
    <input  type="text" name="montant_facture" id="form_montant_facture" required class="form-control {{$errors->has('montant_facture')? 'is-invalid': ''}}" placeholder="{{('Montant facture')}}" value="{{$facture->montant_facture}}">
    @include('alerts.feedback',['field' => 'montant_facture'])
 </div>