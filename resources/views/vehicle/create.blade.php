@extends('layouts.app')


@section('content')

    <h1>{{ __("Ajouter un véhicule") }}</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form action="{{ url('vehicle') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="user_id">{{ __("ID du propriétaire") }}:</label>
            <input type="number" min=0 class="form-control" id="user_id" placeholder="{{ __('ID du propriétaire') }}" name="user_id" />
        </div>

        <div class="form-group mb-3">
            <label for="brand">{{ __("Marque") }}:</label>
            <select name="brand" id="brand" class="form-control" value="Audi">
                <option value="Audi">Audi</option>
                <option value="BMW">BMW</option>
                <option value="Ford">Ford</option>
                <option value="Dodge">Dodge</option>
                <option value="Honda">Honda</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Kia">Kia</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Nissan">Nissan</option>
                <option value="Tesla">Tesla</option>
                <option value="Toyota">Toyota</option>
            </select>
        </div>


        <div class="form-group mb-3">
            <label for="model">{{ __("Modèle") }}:</label>
            <input name="model" type="text" id="model" class="form-control" placeholder="{{ __('Modèle') }}" />
        </div>

        
        <div class="form-group mb-3">
            <label for="license_plate">{{ __("Plaque d'immatriculation (format AAA 123)") }}:</label>
            <input type="text" class="form-control" id="license_plate" placeholder="{{ __('Plaque immatriculation (format AAA 123)') }}" name="license_plate" maxlength="7" />
        </div>


        <div class="form-group mb-3">
            <label for="kilometers">{{ __("Kilometrage") }}:</label>
            <input type="number" min=0 class="form-control" id="kilometers" placeholder="{{ __('Kilometrage') }}" name="kilometers" />
        </div>


        <div class="form-group mb-3">
            <label for="image">{{ __("Photo du véhicule") }}:</label>
            <input type="file" class="form-control" id="image" placeholder="{{ __('Photo du véhicule') }}" name="image" enctype="multipart/form-data" />
        </div>


        <button type="submit" class="btn btn-primary">{{ __("Enregistrer") }}</button>

    </form>

@endsection