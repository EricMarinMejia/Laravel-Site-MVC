@extends('layouts.app')


@section('content')

    <h1>Ajouter une réparation</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form action="{{ url('repair') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="id_vehicle">Id du véhicule:</label>
            <input type="number" min=0 class="form-control" id="id_vehicle" placeholder="Id du véhicule" name="id_vehicle" />
        </div>

        <div class="form-group mb-3">
            <label for="date_start">Date de début:</label>
            <input name="date_start" type="date" id="content" class="form-control" />
        </div>


        <div class="form-group mb-3">
            <label for="date_end">Date de fin:</label>
            <input name="date_end" type="date" id="content" class="form-control" />
        </div>

        
        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <textarea type="text" class="form-control" id="description" placeholder="description" name="description"></textarea>
        </div>


        <div class="form-group mb-3">
            <label for="amount_paid">Montant payé:</label>
            <input type="number" min=0 class="form-control" id="amount_paid" placeholder="amount_paid" name="amount_paid" />
        </div>


        <div class="form-group mb-3">
            <label for="mechanic">Mecanicien:</label>
            <select class="form-control" id="mechanic" placeholder="mechanic" name="mechanic">
                <option value="Michael Alvaros">Michael Alvaros</option>
                <option value="Hugo Montoronni">Hugo Montorroni</option>
                <option value="Jean Tibo">Jean Tibo</option>
                <option value="Alycia Desbourg">Alycia Desbourg</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection