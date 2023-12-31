@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Succès') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vérification de courriel complétée!') }}

                    <div class="col-lg-2">
                        <a class="btn btn-primary" href="{{ url('/') }}">{{ __("Page d'accueil") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
