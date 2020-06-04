<form method="POST" action="{{ $action }}">
    @csrf
    @method($method)

    <div class="form-group {{ $errors->has('nom_client') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_nom_client"><i class="w3-xxlarge fa fa-user"></i>{{ __('Nom') }}</label>
        <input type="text" name="nom_client" id="form_client_nom_client" required class="form-control {{ $errors->has('nom_client') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom') }}" value="{{  $client->nom_client  }}">
        @include('alerts.feedback', ['field' => 'nom_client'])
    </div>

    <div class="form-group {{ $errors->has('prenom') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_prenom">
            <i class="w3-xxlarge fa fa-user"></i>{{ __('Prenom') }}
        </label>
        <input type="text" name="prenom" id="form_client_prenom" required class="form-control {{ $errors->has('prenom') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ $client->prenom }}">
        @include('alerts.feedback', ['field' => 'prenom'])
    </div>

    <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_email"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Email') }}</label>
        <input type="email" name="email" id="form_client_email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="">
        @include('alerts.feedback', ['field' => 'email'])
    </div>

    <div class="form-group {{ $errors->has('num_permis') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_num_permis"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num permis') }}</label>
        <input type="text" name="num_permis" id="form_client_num_permis" class="form-control {{ $errors->has('num_permis') ? ' is-invalid' : '' }}" placeholder="{{ __('Num permis') }}" value="">
        @include('alerts.feedback', ['field' => 'num_permis'])
    </div>

    <div class="form-group {{ $errors->has('telephone') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_telephone"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Num télephone') }}</label>
        <input type="text" name="telephone" id="form_client_telephone" class="form-control {{ $errors->has('telephone') ? ' is-invalid' : '' }}" placeholder="{{ __('Num télephone') }}" value="">
        @include('alerts.feedback', ['field' => 'telephone'])
    </div>

    <div class="form-group {{ $errors->has('pays') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_pays"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Pays') }}</label>
        <input type="text" name="pays" id="form_client_pays" class="form-control {{ $errors->has('pays') ? ' is-invalid' : '' }}" placeholder="{{ __('Pays') }}" value="">
        @include('alerts.feedback', ['field' => 'pays'])
    </div>

    <div class="form-group {{ $errors->has('code_postal') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="form_client_code_postal"><i class="w3-xxlarge fa fa-envelope-o"></i>{{ __('Code postal') }}</label>
        <input type="text" name="code_postal" id="form_client_code_postal" class="form-control {{ $errors->has('code_postal') ? ' is-invalid' : '' }}" placeholder="{{ __('Code postal') }}" value="">
        @include('alerts.feedback', ['field' => 'code_postal'])
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-default mt-4">{{ __('Save') }}</button>
    </div>
</form>
