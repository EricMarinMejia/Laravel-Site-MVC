@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h3>Pro-Auto Experts</h3>
            <h4>Système de gestion des réparations automobiles</h4>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ url('vehicle/create') }}">Ajouter un véhicule</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif


<br />
<div class="container">
    <div class="row">
        @foreach ($vehicles as $index => $vehicle)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('vehicle/'. $vehicle->id) }}">
                <h2>
                    Véhicule #{{ $vehicle->id }}
                </h2>
                </a>
            <p><strong>{{ $vehicle->license_plate }}</strong></p>
            <p>{{ $vehicle->brand }} {{ $vehicle->model }}</p>
            <a href="{{ url('vehicle/'. $vehicle->id) }}" class="btn btn-outline-primary">Voir les détails</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection