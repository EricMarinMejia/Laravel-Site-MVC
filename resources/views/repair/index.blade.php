@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h2>Mon blog avec Laravel</h2>
        </div>

        <div class="col-lg-2">
            <a class="btn btn-success" href="{{ url('repair/create') }}">Ajouter une reparation</a>
        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif



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
            <a href="{{ url('repair/'. $repair->id) }}" class="btn btn-outline-primary">En savoir plus</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection