@extends('layouts.app')


@section('content')

    <div class="bg-light p-5 rounded">
		<h1>Dashboard</h1>

		@if (session('resent'))
			<div class="alert alert-success" role="alert">
				A fresh verification link has been sent to your email address.
			</div>
		@endif

		Avant de continuer, veuillez consulter votre boîte à courriels pour un lien de vérification. Si vous n'avez pas reçu de lien,
		<form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
			@csrf
			<button type="submit" class="d-inline btn btn-link p-0">
				cliquez ici pour renvoyer un autre
			</button>.
		</form>
	</div>

@endsection







