@extends('layouts.app')


@section('content')


    <h1>{{ __("Modifier réparation") }} #{{ $repair->id }}</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('repair/'. $repair->id) }}" >
        @method('PATCH')
        @csrf

        <div class="form-group mb-3">
            <label for="vehicle_id">{{ __("ID du véhicule") }}:</label>
            <input type="number" min=0 class="form-control" id="vehicle_id" placeholder="{{ __('ID du véhicule') }}" name="vehicle_id" value="{{ $repair->vehicle_id }}" />
        </div>

        <div class="form-group mb-3">
            <label for="date_start">{{ __("Date de début") }}:</label>
            <input name="date_start" type="date" id="content" class="form-control" value="{{ $repair->date_start }}" placeholder="{{ __('Date de début') }}" />
        </div>


        <div class="form-group mb-3">
            <label for="date_end">{{ __("Date de fin") }}:</label>
            <input name="date_end" type="date" id="content" class="form-control" value="{{ $repair->date_end }}" placeholder="{{ __('Date de fin') }}" />
        </div>

        
        <div class="form-group mb-3">
            <label for="description">{{ __("Description") }}:</label>
            <textarea type="text" class="form-control" id="description" placeholder="{{ __('Description') }}" name="description">{{ $repair->description }}</textarea>
        </div>


        <div class="form-group mb-3">
            <label for="amount_paid">{{ __("Montant payé") }}:</label>
            <input type="number" min=0 class="form-control" id="amount_paid" placeholder="{{ __('Montant payé') }}" name="amount_paid" value="{{ $repair->amount_paid }}" />
        </div>


        <div class="form-group mb-3">
            <label for="mechanic">{{ __("Mécanicien") }}:</label>
            <select class="form-control" id="mechanic" placeholder="{{ __('Mécanicien') }}" name="mechanic" value="{{ $repair->mechanic }}">
                <option value="Michael Alvaros">Michael Alvaros</option>
                <option value="Hugo Montoronni">Hugo Montorroni</option>
                <option value="Jean Tibo">Jean Tibo</option>
                <option value="Alycia Desbourg">Alycia Desbourg</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">{{ __("Enregistrer") }}</button>

    </form>

@endsection