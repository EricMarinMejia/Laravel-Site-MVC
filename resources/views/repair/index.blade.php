@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h3>Pro-Auto Experts</h3>
            <h4>Système de gestion des réparations automobiles</h4>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ url('repair/create') }}">Ajouter une réparation</a>
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
        @foreach ($repairs as $index => $repair)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('repair/'. $repair->id) }}">
                <h2>
                    Réparation #{{ $repair->id }}
                </h2>
                </a>
            <p><strong>{{ $repair->description }}</strong></p>
            <p>{{ $repair->date_start }} - {{ $repair->date_end }}</p>
            <a href="{{ url('repair/'. $repair->id) }}" class="btn btn-outline-primary">Voir les détails</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection