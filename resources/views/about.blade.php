@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>{{ __("À propos de ce projet") }}</h1>

        <br />
        <hr />
        <br />

        <h3>{{ __("Informations générales") }}</h3>
        <p><strong>{{ __("Site créer par") }} : </strong>Eric Marin Mejia</p>
        <p><strong>{{ __("Cours") }} : </strong>420-5H6 MO Applications Web transactionnelles.</p>
        <p><strong>{{ __("Session") }} : </strong>Automne 2023, Collège Montmorency.</p>
        <p><strong>{{ __("Dépôt Github du projet") }} : </strong><a href="https://github.com/EricMarinMejia/Laravel-Site-MVC" target="_blank">Laravel-Site-MVC</a></p>

        <br />
        <hr />
        <br />

        <h3>{{ __("Description du site et des fonctionalitées") }}</h3>
        <p>
            <strong>Inscription</strong><br />
            Lorsque nous accédons au site, nous sommes demandés de nous connecter afin d'accéder au service. En haut à droite
            de la page, nous retrouvons le boutton "S'inscrire" qui permet de se créer un compte. Une fois le compte créer, un nouvel
            utilisateur est créer dans la base de données et nous sommes redirigés vers la page de connexion. De plus, un lien de vérification
            est automatiquement envoyé au courriel entré afin de confirmer la création de compte.
        </p>

        <br />

        <p>
            <strong>Connexion</strong><br />
            Une fois le compte créer nous pouvons nous connecter. Il est possible de demander au site de garder notre session ouverte si la page 
            est soudainement fermée. Il est important de noter qu'il sera impossible d'accéder aux pages tant et aussi longtemps que la 
            vérification par email n'a été faite. Si c'est le cas, l'utilisateur sera redirigé vers une page qui permet de renvoyer un lien 
            de vérification au besoin. Lorsque la vérification est complétée, les services seront accessibles. 
        </p>

        <br />

        <p>
            <strong>Traduction</strong><br />
            Le site entier est traduit en anglais, français et espagnol ainsi que les messages d'erreur. Il est possible en tout temps d'utiliser
            le menu déroulant dans la barre de navigation afin de traduire la page sur laquelle on se trouve.
        </p>

        <br />

        <p>
            <p>
                <strong>Réparations</strong><br />
                <strong>1) Liste</strong><br />
                    La page des réparations affiche toutes les réparations qui existent. Elle permet de cliquer sur chacune d'entre 
                    elles et de voir leur détails. Cette page contient également un bouton en haut à droite qui permet l'ajout d'une 
                    nouvelle réparation.
            </p>

            <p>
                <strong>2) Réparation spécifique</strong><br />
                    Lorsque l'on clique sur une réparation spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celle-ci. De plus, on y trouve un boutton qui permet de visiter la page du véhicule sur lequel
                    la réparation a été faite ainsi que deux bouttons qui permettent la modification et la suppression de cette réparation.
            </p>

            <p>
                <strong>3) Ajout</strong><br />
                    Cette page permet d'ajouter une nouvelle réparation pour un véhicule. Tout les champs sont requis.
            </p>

            <p>
                <strong>4) Modification</strong><br />
                    Cette page permet de modifier les détails d'une réparation. Seuls les champs modifiés seront affectés.
            </p>
        
            <p>
                <strong>5) Supression</strong><br />
                    Cette fonctionalitée permet de supprimer une réparation.
            </p>
        </p>


        <p>
            <p>
                <strong>Véhicules</strong><br />
                <strong>1) Liste</strong><br />
                    La page des véhicules affiche tous les véhicules qui existent. Elle permet de cliquer sur chacun d'entre 
                    eux et de voir leur détails. Cette page contient également un bouton en haut à droite qui permet l'ajout d'un 
                    nouveau véhicule.
            </p>

            <p>
                <strong>2) Véhicule spécifique</strong><br />
                    Lorsque l'on clique sur un véhicule spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celui-ci. De plus, on y trouve un historique complet de toutes les réparations faites sur ce véhicule, un boutton
                    qui permet de visiter la page de l'utilisateur propriétaire ainsi que deux bouttons qui permettent la modification 
                    et la suppression de ce véhicule.
            </p>

            <p>
                <strong>3) Ajout</strong><br />
                    Cette page permet d'ajouter un nouveau véhicule pour un utilisateur. Tout les champs sont requis.
            </p>

            <p>
                <strong>4) Modification</strong><br />
                    Cette page permet de modifier les détails d'un véhicule. Seuls les champs modifiés seront affectés.
            </p>
        
            <p>
                <strong>5) Supression</strong><br />
                    Cette fonctionalitée permet de supprimer un véhicule.
            </p>
        </p>

        <br />

        <p>
            <p>
                <strong>Utilisateurs</strong><br />
                <strong>1) Liste</strong><br />
                    La page des utilisateurs affiche tous les utilisateurs qui existent. Elle permet de cliquer sur chacun d'entre 
                    eux et de voir leur détails. Cette page, contrairement aux autres, ne contient pas de bouton qui permet l'ajout d'un 
                    nouvel utilisateur puisque ceux-ci sont ajoutés à travers l'inscription au site.
            </p>

            <p>
                <strong>2) Utilisateur spécifique</strong><br />
                    Lorsque l'on clique sur un utilisateur spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celui-ci. On y trouve également une liste des véhicules appartenant à cet utilisateur.
            </p>
        </p>

    </div>
</div>


@endsection