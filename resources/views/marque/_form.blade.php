<div class="form-group {{$errors->has('marque_vehicule') ? 'has-danger' : ''}}">
    <label class="form-control-label" for="form_marque_vehicule"><i class="w3-xxlarge fa fa-user"></i>{{__('Marque')}}</label>
    <input type="text" name="marque_vehicule" id="form_marque_vehicule" required class="form-control{{$errors->has('marque_vehicule') ? 'has-danger' : ''}}" placeholder="{{__('Marque') }}" value="{{$marque->marque_vehicule}}">
    @include('alerts.feedback', ['field' => 'marque_vehicule'])
</div>