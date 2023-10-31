@extends('layouts.app')


@section('content')

    <h1>Ajouter un véhicule</h1>


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
            <label for="user_id">Id du propriétaire:</label>
            <input type="number" min=0 class="form-control" id="user_id" placeholder="Id du propriétaire" name="user_id" />
        </div>

        <div class="form-group mb-3">
            <label for="brand">Marque:</label>
            <select name="brand" id="brand" class="form-control">
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
            <label for="model">Modèle:</label>
            <input name="model" type="text" id="model" class="form-control" placeholder="Modèle" />
        </div>

        
        <div class="form-group mb-3">
            <label for="license_plate">Plaque (format AAA 123):</label>
            <input type="text" class="form-control" id="license_plate" placeholder="Plaque" name="license_plate" maxlength="7" />
        </div>


        <div class="form-group mb-3">
            <label for="kilometers">Kilometrage:</label>
            <input type="number" min=0 class="form-control" id="kilometers" placeholder="Kilometrage" name="kilometers" />
        </div>


        <div class="form-group mb-3">
            <label for="image">Photo du véhicule:</label>
            <input type="file" class="form-control" id="image" placeholder="image" name="image" enctype="multipart/form-data" />
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection