@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-lg-10">
            <h3>Pro-Auto Experts</h3>
            <h4>{{ __("Système de gestion des réparations automobiles") }}</h4>
        </div>

        <div class="col-lg-2">
            <div class="container">
                <p>Rechercher un utilisateur</p>   
                <input class="typeahead form-control" id="search" type="text">
            </div>
        </div>

    </div>

    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
    
        $( "#search" ).autocomplete({
            source: function( request, response ) {
            $.ajax({
                url: path,
                type: 'GET',
                dataType: "json",
                data: {
                search: request.term
                },
                success: function( data ) {
                response( data );
                }
            });
            },
            select: function (event, ui) {
            window.location.href = '/user/' + ui.item.id;
            // Prevent the default behavior and stop the event propagation
            event.preventDefault();
            event.stopPropagation();
            }
        });
    </script>



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
                    {{ $user->first_name }} {{ $user->last_name }}
                </h2>
                </a>
            <p><strong>{{ $user->email }}</strong></p>
            <a href="{{ url('user/'. $user->id) }}" class="btn btn-outline-primary">{{ __("Voir les détails") }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection