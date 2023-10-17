@extends('layouts.app')


@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h1>Détails pour l'utilisateur #{{ $user->id }}</h1>
            <p class="lead">Nom complet: {{ $user->first_name }} {{ $user->last_name }}</p>
            <p class="lead">Adresse: {{ $user->address }}</p>
            <p class="lead">Âge: {{ $user->age }}</p>
            <p class="lead">Numéro de téléphone: {{ $user->phone_number }}</p>
            <p class="lead">Courriel: {{ $user->email }}</p>
            <br />
            <p class="lead">Entrée créer le: {{ $user->created_at }}</p>
            <p class="lead">Dernière modification de l'entrée: {{ $user->updated_at }}</p>

            <div class="buttons">
                <a href="{{ url('user/'. $user->id .'/edit') }}" class="btn btn-info">Modifier</a>
                <form action="{{ url('user/'. $user->id) }}" method="POST" style="display: inline">
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