
                        <div class="form-group {{$errors->has('nom') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_nom"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="text" name="nom" id="form_vehicule_nom" required class="form-control {{ $errors->has('nom') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom') }}" value="{{  $vehicule->nom  }}">
                            @include('alerts.feedback', ['field' => 'nom'])
                        </div>
                        <div class="form-group {{$errors->has('num_matriculation') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_num_matriculation"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="text" name="num_matriculation" id="form_vehicule_num_matriculation" required class="form-control {{ $errors->has('num_matriculation') ? ' is-invalid' : '' }}" placeholder="{{ __('Numero matriculation') }}" value="{{  $vehicule->num_matriculation }}">
                            @include('alerts.feedback', ['field' => 'num_matriculation'])
                        </div>
                        <div class="form-group {{$errors->has('km_compteur') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_km_compteur"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="text" name="km_compteur" id="form_vehicule_km_compteur" required class="form-control {{ $errors->has('km_compteur') ? ' is-invalid' : '' }}" placeholder="{{ __('Kilometrage compteur') }}" value="{{  $vehicule->km_compteur }}">
                            @include('alerts.feedback', ['field' => 'km_compteur'])
                        </div>
                        <div class="form-group {{$errors->has('date_achat') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_date_achat"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="date" name="date_achat" id="form_vehicule_date_achat" required class="form-control {{ $errors->has('date_achat') ? ' is-invalid' : '' }}" placeholder="{{ __('Date achat') }}" value="{{  $vehicule->date_achat }}">
                            @include('alerts.feedback', ['field' => 'date_achat'])
                        </div>
                        <div class="form-group {{$errors->has('carte_grise') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_carte_grise"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="text" name="carte_grise" id="form_vehicule_carte_grise" required class="form-control {{ $errors->has('carte_grise') ? ' is-invalid' : '' }}" placeholder="{{ __('Carte grise') }}" value="{{  $vehicule->carte_grise}}">
                            @include('alerts.feedback', ['field' => 'carte_grise'])
                        </div>
                        <div class="form-group {{$errors->has('photo_vehicule') ? 'has-danger' :''}}">
                            <label class="form-control-label" for="form_vehicule_photo_vehicule"><i class="w3-xxlarge fa fa-user"></i>
                            </label>
                            <input type="text" name="photo_vehicule" id="form_vehicule_photo_vehicule" required class="form-control {{ $errors->has('photo_vehicule') ? ' is-invalid' : '' }}" placeholder="{{ __('Photo vehicule') }}" value="{{  $vehicule->photo_vehicule}}">
                            @include('alerts.feedback', ['field' => 'photo_vehicule'])
                        </div>

