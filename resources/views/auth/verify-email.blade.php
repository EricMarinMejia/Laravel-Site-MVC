@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Vérification d'adresse courriel") }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien à été envoyé à votre adresse courriel.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez consulter votre boîte à courriels pour un lien de vérification.') }}
                    {{ __("Si vous n'avez pas reçu de lien") }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour renvoyer un autre') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
