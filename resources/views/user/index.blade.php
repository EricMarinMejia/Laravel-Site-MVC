@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h3>Pro-Auto Experts</h3>
            <h4>Système de gestions des réparations automobiles</h4>
        </div>

        <div class="col-lg-2">
            <!-- <a class="btn btn-success" href="{{ url('user/create') }}">Ajouter une réparation</a> -->
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
        @foreach ($users as $index => $user)
        <div class="col-md-4">
            <div class="card card-body">
                <a href="{{ url('user/'. $user->id) }}">
                <h2>
                    Utilisateur #{{ $user->id }}
                </h2>
                </a>
            <p><strong>{{ $user->first_name }} {{ $user->last_name }}</strong></p>
            <p>{{ $user->email }}</p>
            <a href="{{ url('user/'. $user->id) }}" class="btn btn-outline-primary">Voir les détails</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection