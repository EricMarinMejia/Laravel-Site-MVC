@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>Détails pour la réparation #{{ $repair->id }}</h1>
            <p class="lead">Véhicule: {{ $vehicle->brand }} {{ $vehicle->model }}</p>
            <p class="lead">Date de début: {{ $repair->date_start }}</p>
            <p class="lead">Date de fin: {{ $repair->date_end }}</p>
            <p class="lead">Description: {{ $repair->description }}</p>
            <p class="lead">Montant payé: {{ $repair->amount_paid }}$</p>
            <p class="lead">Mécanicien: {{ $repair->mechanic }}</p>
            <br />
            <p class="lead">Entrée créer le: {{ $repair->created_at }}</p>
            <p class="lead">Dernière modification de l'entrée: {{ $repair->updated_at }}</p>

            <a href="{{ url('vehicle/'. $vehicle->id) }}">
                <h4>Voir le véhicule #{{ $vehicle->id }}: {{ $vehicle->brand }} {{ $vehicle->model }}</h4>
            </a>

            <div class="buttons">
                <a href="{{ url('repair/'. $repair->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('repair/'. $repair->id) }}" method="POST" style="display: inline">
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