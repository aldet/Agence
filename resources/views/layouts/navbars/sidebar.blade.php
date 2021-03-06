<div class="sidebar" data-image="{{ asset('light-bootstrap/img/sidebar-5.jpg') }}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                {{ __("Creative Tim") }}
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item @if($activePage == 'dashboard') active @endif">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>{{ __("Dashboard") }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laravelExamples" @if($activeButton =='laravel') aria-expanded="true" @endif>
                    <i>
                        <img src="{{ asset('light-bootstrap/img/laravel.svg') }}" style="width:25px">
                    </i>
                    <p>
                        {{ __('Laravel example') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='laravel') show @endif" id="laravelExamples">
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('profile.edit')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("User Profile") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('user.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("User Management") }}</p>
                            </a>
                        </li>
                        <li class="nav-item @if($activePage == 'user-management') active @endif">
                            <a class="nav-link" href="{{route('admin.users.index')}}">
                                <i class="nc-icon nc-circle-09"></i>
                                <p>{{ __("User Management") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#agence" @if($activeButton =='agence') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __("Agence") }}</p>
                </a>
                <div class="collapse @if($activeButton =='agence') show @endif" id="agence">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('agence.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Mon agence") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('agence.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Nouvelle agence") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#clientagence" @if($activeButton =='client') aria-expanded="true" @endif>
                    <i>
                        <i class="nc-icon nc-circle-09"></i>
                    </i>
                    <p>
                        {{ __('Client') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse @if($activeButton =='client') show @endif" id="clientagence">

                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('client.index')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("List client") }}</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item @if($activePage == 'user') active @endif">
                            <a class="nav-link" href="{{route('client.create')}}">
                                <i class="nc-icon nc-single-02"></i>
                                <p>{{ __("Ajouter client") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </li>
            
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#vehicule" @if($activeButton =='vehicule') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Vehicule") }}</p>
                </a>
                <div class="collapse @if($activeButton =='vehcicule') show @endif" id="vehicule">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('vehicule.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste voiture") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('vehicule.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer voiture") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#marque" @if($activeButton =='marque') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Marque") }}</p>
                </a>
                <div class="collapse @if($activeButton =='marque') show @endif" id="marque">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('marque.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste Marque") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('marque.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer Marque") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#categorie" @if($activeButton =='categorie') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Categorie") }}</p>
                </a>
                <div class="collapse @if($activeButton =='categorie') show @endif" id="categorie">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('categorie.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste Categorie") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('categorie.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer Categorie") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tarification" @if($activeButton =='tarification') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Tarification") }}</p>
                </a>
                <div class="collapse @if($activeButton =='tarification') show @endif" id="tarification">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('tarification.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste tarification") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('tarification.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer tarification") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#contrat" @if($activeButton =='contrat') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Contrat") }}</p>
                </a>
                <div class="collapse @if($activeButton =='conrat') show @endif" id="contrat">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('contrat.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste conrats") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('contrat.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer conrat") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#facture" @if($activeButton =='facture') aria-expanded="true" @endif>
                    <i class="nc-icon nc-bus-front-12"></i>
                    <p>{{ __("Facture") }}</p>
                </a>
                <div class="collapse @if($activeButton =='Facture') show @endif" id="facture">
                    <ul class="nav">
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('facture.index')}}">
                                <i class="nc-icon nc-paper-2"></i>
                                <p>{{ __("Liste factures") }}</p>
                            </a>
                        </li>
                        <li class="class="nav-item @if($activePage == 'user') active @endif>
                            <a class="nav-link" href="{{route('facture.create')}}">
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>{{ __("Creer facture") }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item @if($activePage == 'table') active @endif">
                <a class="nav-link" href="{{route('page.index', 'table')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>{{ __("Table List") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'typography') active @endif">
                <a class="nav-link" href="{{route('page.index', 'typography')}}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>{{ __("Typography") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'icons') active @endif">
                <a class="nav-link" href="{{route('page.index', 'icons')}}">
                    <i class="nc-icon nc-atom"></i>
                    <p>{{ __("Icons") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'maps') active @endif">
                <a class="nav-link" href="{{route('page.index', 'maps')}}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __("Maps") }}</p>
                </a>
            </li>
            <li class="nav-item @if($activePage == 'notifications') active @endif">
                <a class="nav-link" href="{{route('page.index', 'notifications')}}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __("Notifications") }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active bg-danger" href="{{route('page.index', 'upgrade')}}">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>{{ __("Upgrade to PRO") }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
