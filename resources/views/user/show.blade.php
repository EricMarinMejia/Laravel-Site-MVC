@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>{{ __("Détails pour l'utilisateur") }} #{{ $user->id }}</h1>
            <p class="lead">{{ __("Nom complet") }}: {{ $user->first_name }} {{ $user->last_name }}</p>
            <p class="lead">{{ __("Adresse") }}: {{ $user->address }}</p>
            <p class="lead">{{ __("Âge") }}: {{ $user->age }}</p>
            <p class="lead">{{ __("Numéro de téléphone") }}: {{ $user->phone_number }}</p>
            <p class="lead">{{ __("Courriel") }}: {{ $user->email }}</p>
            <br />
            <p class="lead">{{ __("Entrée créer le") }}: {{ $user->created_at }}</p>
            <p class="lead">{{ __("Dernière modification de l'entrée") }}: {{ $user->updated_at }}</p>


            <div>
                <h4>{{ __("Liste des véhicules") }}</h4>
                <div class="list-group">
                    @foreach($vehicles as $vehicle)
                        <a href="{{ url('vehicle/'. $vehicle->id) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                <h6 class="mb-0">{{ $vehicle->brand }} {{ $vehicle->model }}</h6>
                                <p class="mb-0 opacity-75">{{ $vehicle->license_plate }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <br />


            <!--
            <div class="buttons">
                <a href="{{ url('user/'. $user->id .'/edit') }}" class="btn btn-info">{{ __("Modifier") }}</a>
                <form action="{{ url('user/'. $user->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __("Supprimer") }}</button>
                </form>
            </div>
            -->
        </div>
    </div>
</div>
</div>


@endsection