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
        <p><strong>{{ __("Cours") }} : </strong>420-5H6 MO {{ __("Applications Web transactionnelles") }}.</p>
        <p><strong>{{ __("Session") }} : </strong>{{ __("Automne") }} 2023, Collège Montmorency.</p>
        <p><strong>{{ __("Dépôt Github du projet") }} : </strong><a href="https://github.com/EricMarinMejia/Laravel-Site-MVC" target="_blank">Laravel-Site-MVC</a></p>

        <br />
        <hr />
        <br />
        
        @php $locale = session()->get('locale'); @endphp

        <h3>{{ __("Description du site et des fonctionalitées") }}</h3>
        <p>
            <strong>{{ __("Inscription") }}</strong><br />
            @switch($locale)
            @case('en')
                When we access the site, we are asked to log in in order to access the service. Top right On the page, we find the 'Register'
                button which allows you to create an account. Once the account is created, a new user is created in the database and we are 
                redirected to the login page. In addition, a verification link is automatically sent to the email you enter to confirm the account creation.
            @break
            @case('fr')
                Lorsque nous accédons au site, nous sommes demandés de nous connecter afin d'accéder au service. En haut à droite
                de la page, nous retrouvons le boutton 'S'inscrire' qui permet de se créer un compte. Une fois le compte créer, un nouvel
                utilisateur est créer dans la base de données et nous sommes redirigés vers la page de connexion. De plus, un lien de vérification
                est automatiquement envoyé au courriel entré afin de confirmer la création de compte.
            @break
            @case('es')
                Cuando accedemos al sitio, se nos pide que iniciemos sesión para acceder al servicio. Arriba a la derecha En la página, encontramos
                 el botón 'Registrarse' que le permite crear una cuenta. Una vez creada la cuenta, se abre un nuevo El usuario se crea en la base de 
                 datos y se nos redirige a la página de inicio de sesión. Además, un enlace de verificación se envía automáticamente al correo electrónico 
                 que ingrese para confirmar la creación de la cuenta.
            @break
            @default
            @endswitch
        </p>

        <br />

        <p>
            <strong>{{ __("Connexion") }}</strong><br />
            @switch($locale)
            @case('en')
                Once the account is created, we can log in. It is possible to ask the site to keep us logged in if the page is suddenly closed.
                 It is important to note that it will not be possible to access the pages as long as the Email verification has not been done.
                  If this is the case, the user will be redirected to a page that allows a link to be returned as required. Once the audit is complete, 
                  services will be accessible.
            @break
            @case('fr')
                Une fois le compte créer nous pouvons nous connecter. Il est possible de demander au site de garder notre session ouverte si la page 
                est soudainement fermée. Il est important de noter qu'il sera impossible d'accéder aux pages tant et aussi longtemps que la 
                vérification par email n'a été faite. Si c'est le cas, l'utilisateur sera redirigé vers une page qui permet de renvoyer un lien 
                de vérification au besoin. Lorsque la vérification est complétée, les services seront accessibles.
            @break
            @case('es')
                Una vez creada la cuenta, podemos iniciar sesión. Es posible pedirle al sitio que nos mantenga conectados si la página se cierra de repente. 
                Es importante tener en cuenta que no será posible acceder a las páginas mientras el No se ha realizado la verificación por correo electrónico. 
                Si este es el caso, el usuario será redirigido a una página que permite devolver un enlace según sea necesario. Una vez que se complete la auditoría, 
                se podrá acceder a los servicios.
            @break
            @default
            @endswitch
        </p>

        <br />

        <p>
            <strong>{{ __("Traduction") }}</strong><br />
            @switch($locale)
            @case('en')
                The entire site is translated into English, French and Spanish as well as error messages. It is possible to use the the drop-down menu 
                in the navigation bar in order to translate the page you are on.
            @break
            @case('fr')
                Le site entier est traduit en anglais, français et espagnol ainsi que les messages d'erreur. Il est possible en tout temps d'utiliser
                le menu déroulant dans la barre de navigation afin de traduire la page sur laquelle on se trouve.
            @break
            @case('es')
                Todo el sitio está traducido al inglés, francés y español, así como a los mensajes de error. Es posible utilizar la función el menú desplegable 
                de la barra de navegación para traducir la página en la que se encuentra.
            @break
            @default
            @endswitch
        </p>

        <br />

        <p>
            <p>
                <strong>{{ __("Réparations") }}</strong><br />
                <strong>1) {{ __("Liste") }}</strong><br />
                @switch($locale)
                @case('en')
                    The repairs page displays all the repairs that exist. It allows you to click on each of them and see their details. 
                    This page also contains a button at the top right that allows you to add a new repair.
                @break
                @case('fr')
                    La page des réparations affiche toutes les réparations qui existent. Elle permet de cliquer sur chacune d'entre 
                    elles et de voir leur détails. Cette page contient également un bouton en haut à droite qui permet l'ajout d'une 
                    nouvelle réparation.
                @break
                @case('es')
                    La página de reparaciones muestra todas las reparaciones que existen. Te permite hacer clic en cada uno de ellos 
                    y ver sus detalles. Esta página también contiene un botón en la parte superior derecha que le permite agregar un nueva reparación.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>2) {{ __("Réparation spécifique") }}</strong><br />
                @switch($locale)
                @case('en')
                    When we click on a specific repair, we are directed to a page that displays the full details of it. In addition, there is a button 
                    that allows you to visit the page of the vehicle on which you are The repair has been made as well as two buttons that allow the modification 
                    and deletion of this repair.
                @break
                @case('fr')
                    Lorsque l'on clique sur une réparation spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celle-ci. De plus, on y trouve un boutton qui permet de visiter la page du véhicule sur lequel
                    la réparation a été faite ainsi que deux bouttons qui permettent la modification et la suppression de cette réparation.
                @break
                @case('es')
                    Cuando hacemos clic en una reparación específica, se nos dirige a una página que muestra todos los detalles de la misma. 
                    Además, hay un botón que te permite visitar la página del vehículo en el que te encuentras Se ha realizado la reparación así como 
                    dos botones que permiten la modificación y eliminación de esta reparación.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>3) {{ __("Ajout") }}</strong><br />
                @switch($locale)
                @case('en')
                    Use this page to add a new repair for a vehicle. All fields are required.
                @break
                @case('fr')
                    Cette page permet d'ajouter une nouvelle réparation pour un véhicule. Tout les champs sont requis.
                @break
                @case('es')
                    Utilice esta página para agregar una nueva reparación para un vehículo. Todos los campos son obligatorios.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>4) {{ __("Modification") }}</strong><br />
                @switch($locale)
                @case('en')
                    Use this page to edit the details of a repair. Only modified fields will be affected.
                @break
                @case('fr')
                    Cette page permet de modifier les détails d'une réparation. Seuls les champs modifiés seront affectés.
                @break
                @case('es')
                    Utilice esta página para editar los detalles de una reparación. Solo se verán afectados los campos modificados.
                @break
                @default
                @endswitch
            </p>
        
            <p>
                <strong>5) {{ __("Supression") }}</strong><br />
                    {{ __("Cette fonctionalité permet de supprimer une réparation") }}.
            </p>
        </p>


        <p>
            <p>
                <strong>{{ __("Véhicules") }}</strong><br />
                <strong>1) {{ __("Liste") }}</strong><br />
                @switch($locale)
                @case('en')
                    The vehicles page displays all existing vehicles with their image. It allows you to click on each of them them and see their 
                    details. This page also contains a button at the top right that allows you to add a new vehicle.
                @break
                @case('fr')
                    La page des véhicules affiche tous les véhicules qui existent avec leur image. Elle permet de cliquer sur chacun d'entre 
                    eux et de voir leur détails. Cette page contient également un bouton en haut à droite qui permet l'ajout d'un 
                    nouveau véhicule.
                @break
                @case('es')
                    La página de vehículos muestra todos los vehículos existentes con su imagen. Te permite hacer clic en cada uno de ellos y ver sus detalles. 
                    Esta página también contiene un botón en la parte superior derecha que le permite agregar un vehículo nuevo.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>2) {{ __("Véhicule spécifique") }}</strong><br />
                @switch($locale)
                @case('en')
                    When we click on a specific vehicle, we are directed to a page that displays the full details of it. In addition, 
                    there is a complete history of all the repairs made on this vehicle, a button which allows you to visit the page of 
                    the owner user as well as two buttons that allow you to edit and the removal of that vehicle.
                @break
                @case('fr')
                    Lorsque l'on clique sur un véhicule spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celui-ci. De plus, on y trouve un historique complet de toutes les réparations faites sur ce véhicule, un boutton
                    qui permet de visiter la page de l'utilisateur propriétaire ainsi que deux bouttons qui permettent la modification 
                    et la suppression de ce véhicule.
                @break
                @case('es')
                    Cuando hacemos clic en un vehículo específico, se nos dirige a una página que muestra todos los detalles de la misma. 
                    Además, hay un historial completo de todas las reparaciones realizadas en este vehículo, un botón que le permite visitar 
                    la página del usuario propietario, así como dos botones que le permiten editar y la retirada de dicho vehículo.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>3) {{ __("Ajout") }}</strong><br />
                @switch($locale)
                @case('en')
                    This page allows you to add a new vehicle for a user. All fields are required except the one in the image. 
                    If no photo is provided, a generic image will be set by default.
                @break
                @case('fr')
                    Cette page permet d'ajouter un nouveau véhicule pour un utilisateur. Tout les champs sont requis sauf celui de l'image.
                    Si aucune photo n'est fourni, une image générique sera défini par défaut.
                @break
                @case('es')
                    Esta página le permite agregar un nuevo vehículo para un usuario. Todos los campos son obligatorios excepto el de la imagen. 
                    Si no se proporciona ninguna foto, se establecerá una imagen genérica de forma predeterminada.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>4) {{ __("Modification") }}</strong><br />
                @switch($locale)
                @case('en')
                    Use this page to edit the details of a vehicle. Only modified fields will be affected.
                @break
                @case('fr')
                    Cette page permet de modifier les détails d'un véhicule. Seuls les champs modifiés seront affectés.
                @break
                @case('es')
                    Utilice esta página para editar los detalles de un vehículo. Solo se verán afectados los campos modificados.
                @break
                @default
                @endswitch
            </p>
        
            <p>
                <strong>5) {{ __("Supression") }}</strong><br />
                    {{ __("Cette fonctionalitée permet de supprimer un véhicule") }}.
            </p>
        </p>

        <br />

        <p>
            <p>
                <strong>{{ __("Utilisateurs") }}</strong><br />
                <strong>1) {{ __("Liste") }}</strong><br />
                @switch($locale)
                @case('en')
                    The users page displays all the users that exist. It allows you to click on each of them them and see their details. 
                    This page, unlike the others, does not contain a button that allows you to add a new user since these are added through 
                    registration to the site.
                @break
                @case('fr')
                    La page des utilisateurs affiche tous les utilisateurs qui existent. Elle permet de cliquer sur chacun d'entre 
                    eux et de voir leur détails. Cette page, contrairement aux autres, ne contient pas de bouton qui permet l'ajout d'un 
                    nouvel utilisateur puisque ceux-ci sont ajoutés à travers l'inscription au site.
                @break
                @case('es')
                    La página de usuarios muestra todos los usuarios que existen. Te permite hacer clic en cada uno de ellos y ver sus detalles. 
                    Esta página, a diferencia de las demás, no contiene un botón que le permita agregar un nuevo usuario ya que estos se agregan 
                    a través del registro al sitio.
                @break
                @default
                @endswitch
            </p>

            <p>
                <strong>2) {{ __("Utilisateur spécifique") }}</strong><br />
                @switch($locale)
                @case('en')
                    When we click on a specific user, we are directed to a page that displays the full details of it. 
                    There is also a list of vehicles owned by that user.
                @break
                @case('fr')
                    Lorsque l'on clique sur un utilisateur spécifique, nous somme dirigés vers une page qui affiche les détails complets
                    de celui-ci. On y trouve également une liste des véhicules appartenant à cet utilisateur.
                @break
                @case('es')
                    Cuando hacemos clic en un usuario específico, se nos dirige a una página que muestra todos los detalles de la misma. 
                    También hay una lista de vehículos propiedad de ese usuario.
                @break
                @default
                @endswitch
            </p>
        </p>

        <br />
        <hr />
        <br />

        <h3>{{ __("Comment utiliser le site") }}</h3>
        <p>
            @switch($locale)
            @case('en')
                First, create an account with the sign up button in the navigation bar. Once this step is done, you You can check in your emails for 
                a verification link. Keep in mind that it is possible to translate the page at any time using the drop-down menu in the navigation bar. 
                Once logged in, we can go to the 'Vehicles' section in order to Add a vehicle with the button at the top right. It is possible to give it an 
                image or leave it blank. If No image is given, a default image will be assigned. It is then possible to click on the vehicle to see the details, 
                access the owner's profile, view the list of repairs, edit or delete the owner. Then, in 'Repair', Add a new repair using the button at the top right. 
                Again, it's possible to see the details, access to the vehicle on which the repair was made, modify or remove the repair. Finally, the same thing 
                is possible in the 'Users' section.
            @break
            @case('fr')
                Premièrement, créez-vous un compte avec le boutton s'inscrire dans la barre de navigation. Une fois cette étape de faite, vous
                pouvez vérifier dans vos emails pour un lien de vérification. Gardez en tête qu'à tout moment il est possible de traduire la page
                à l'aide du menu déroulant dans la barre de navigation. Une fois connecté, nous pouvons aller dans la section 'Véhicules' afin 
                d'ajouter un véhicule avec le boutton en haut à droite. Il est possible de lui procurer une image ou de la laisser vide. Si 
                aucune image n'est donnée, une image par défaut sera attribuée. Il est possible ensuite de cliquer sur le véhicule pour voir les
                détails, accéder au profil du propriétaire, voir la liste des réparations, modifier ou supprimer celui-ci. Ensuite, dans 'Réparation',
                on ajoute une nouvelle réparation à l'aide du boutton en haut à droite. Encore une fois, il est possible de voir les détails, accéder
                au véhicule sur lequel la réparation a été faite, modifier ou supprimer la réparation. Finalement, la même chose est possible dans 
                la section 'Utilisateurs'.
            @break
            @case('es')
                Primero, cree una cuenta con el botón de registro en la barra de navegación. Una vez realizado este paso, Puede consultar sus correos 
                electrónicos para obtener un enlace de verificación. Ten en cuenta que es posible traducir la página en cualquier momento usando el menú 
                desplegable en la barra de navegación. Una vez iniciada la sesión, podemos ir a la sección 'Vehículos' para Añade un vehículo con el botón 
                de la parte superior derecha. Es posible darle una imagen o dejarla en blanco. Si No se proporciona ninguna imagen, se asignará una imagen predeterminada. 
                A continuación, es posible hacer clic en el vehículo para ver el Detalles, acceder al perfil del propietario, ver la lista de reparaciones, editar o 
                eliminar el propietario. Luego, en 'Reparar', Añade una nueva reparación con el botón de la parte superior derecha. De nuevo, es posible ver los detalles, 
                acceder al vehículo en el que se realizó la reparación, modifique o elimine la reparación. Finalmente, lo mismo es posible en en la sección 'Usuarios'.
            @break
            @default
            @endswitch
        </p>

        <br />
        <hr />
        <br />

        <h3>{{ __("Diagramme de la base de données") }}</h3>
        <img src="{{ asset('storage/images/default/conception.png') }}" alt="conception.png" />

        <br />
        <hr />
        <br />

        <h3>{{ __("Base de données basée sur modèle") }}</h3>
        <a href="https://modelarchive.databases.biz/data_models/car_svc_center/index.html" target="_blank">{{ __("Voir le modèle complet") }}</a>
        <img src="{{ asset('storage/images/default/reference.png') }}" alt="reference.png" />

    </div>
</div>


@endsection