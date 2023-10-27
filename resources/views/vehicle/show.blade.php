@extends('layouts.app')


@section('content')

<div class="container">

    @guest
    <h1>Connexion requise.</h1>
    <p class="lead">Veuillez vous connecter ou créer un compte afin d'accéder à la page.</p>
    @endguest

    <div class="row">
        @auth
        <div class="col-md-12">
            <h1>Détails pour le véhicule #{{ $vehicle->id }}</h1>
            <p class="lead">Propriétaire: {{ $user->first_name }} {{ $user->last_name }}</p>
            <p class="lead">Marque: {{ $vehicle->brand }}</p>
            <p class="lead">Modèle: {{ $vehicle->model }}</p>
            <p class="lead">Plaque: {{ $vehicle->license_plate }}</p>
            <p class="lead">Kilometrage: {{ $vehicle->kilometers }} km</p>
            <br />
            <p class="lead">Entrée créer le: {{ $vehicle->created_at }}</p>
            <p class="lead">Dernière modification de l'entrée: {{ $vehicle->updated_at }}</p>

            <div>
                <h4>Historique des réparations</h4>
                <div class="list-group">
                    @foreach($repairs as $repair)
                    <a href="{{ url('repair/'. $repair->id) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                        <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                                <h6 class="mb-0">{{ $repair->description }}</h6>
                                <p class="mb-0 opacity-75">{{ $repair->date_start }} - {{ $repair->date_end }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <br />
            <form action="{{ url('user/'. $user->id) }}" style="display: inline">
                <button type="submit" class="btn btn-primary d-inline-flex align-items-center">
                    Voir l'utilisateur #{{ $user->id }}: {{ $user->first_name }} {{ $user->last_name }}
                </button>
            </form>
            <br />
            <br />

            <div class="buttons">
                <a href="{{ url('vehicle/'. $vehicle->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('vehicle/'. $vehicle->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</div>
</div>


@endsection