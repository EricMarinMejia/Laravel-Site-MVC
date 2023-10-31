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

        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($vehicles as $index => $vehicle)

                    <div class="col">
                        <div class="card shadow-sm">
                            @if ($vehicle->image != null)
                                <img src="{{ asset('storage/images/upload/'. $vehicle->image) }}" alt="{{ $vehicle->image }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" />
                            @endif
                            @if ($vehicle->image == null)
                            <img src="{{ asset('storage/images/default/defaultCarLogo.png') }}" alt="{{ $vehicle->image }}" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" />
                            @endif

                            <div class="card-body">
                                <p class="card-text">{{ $vehicle->license_plate }}</p>
                                <p class="card-text">{{ $vehicle->brand }} {{ $vehicle->model }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('vehicle/'. $vehicle->id) }}" class="btn btn-sm btn-outline-secondary">Voir les détails</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
</div>


@endsection