@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>{{ __("Détails pour la réparation") }} #{{ $repair->id }}</h1>
            <p class="lead">{{ __("Véhicule") }}: {{ $vehicle->brand }} {{ $vehicle->model }}</p>
            <p class="lead">{{ __("Date de début") }}: {{ $repair->date_start }}</p>
            <p class="lead">{{ __("Date de fin") }}: {{ $repair->date_end }}</p>
            <p class="lead">{{ __("Description") }}: {{ $repair->description }}</p>
            <p class="lead">{{ __("Montant payé") }}: {{ $repair->amount_paid }}$</p>
            <p class="lead">{{ __("Mécanicien") }}: {{ $repair->mechanic }}</p>
            <br />
            <p class="lead">{{ __("Entrée créer le") }}: {{ $repair->created_at }}</p>
            <p class="lead">{{ __("Dernière modification de l'entrée") }}: {{ $repair->updated_at }}</p>


            <form action="{{ url('vehicle/'. $vehicle->id) }}" style="display: inline">
                    <button type="submit" class="btn btn-primary d-inline-flex align-items-center">
                        {{ __("Voir le véhicule") }} #{{ $vehicle->id }}: {{ $vehicle->brand }} {{ $vehicle->model }}
                    </button>
            </form>
            <br />
            <br />

            <div class="buttons">
                <a href="{{ url('repair/'. $repair->id .'/edit') }}" class="btn btn-info">{{ __("Modifier") }}</a>
                <form action="{{ url('repair/'. $repair->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __("Supprimer") }}</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection