@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>Détails pour le véhicule #{{ $vehicle->id }}</h1>
            <p class="lead">ID du propriétaire: {{ $vehicle->user_id }}</p>
            <p class="lead">Marque: {{ $vehicle->brand }}</p>
            <p class="lead">Modèle: {{ $vehicle->model }}</p>
            <p class="lead">Plaque: {{ $vehicle->license_plate }}</p>
            <p class="lead">Kilometrage: {{ $vehicle->kilometers }} km</p>
            <br />
            <p class="lead">Entrée créer le: {{ $vehicle->created_at }}</p>
            <p class="lead">Dernière modification de l'entrée: {{ $vehicle->updated_at }}</p>

            <div class="buttons">
                <a href="{{ url('vehicle/'. $vehicle->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('vehicle/'. $vehicle->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection