<h1>Pour lancer le projet</h1>
<ol>
    <li>Télécharger <a href="https://ampps.com/" target="_blank">Ampps</a> ou tout autre service Apache/PHP/MYSQL</li>
    <li>Télécharger <a href="https://getcomposer.org/" target="_blank">Composer</a></li>
    <li>Cloner le projet dans le sous dossier <samp>Ampps/www/</samp></li>
    <li>Démarrer Ampps et lancer le serveur Apache et MySQL</li>
    <li>Lancer les commandes suivantes à la racine du projet
        <ol>
            <li>Installation des dépendances : <code>composer install</code></li>
            <li>Création du fichier .env : <code>cp .\.env.example .env</code>
                <ol>
                    <li>Générer la clée d'application : <code>php artisan key:generate</code></li>
                    <li>Ajouter les détails de votre base de données pour les champs <samp>DB_DATABASE, DB_USERNAME</samp> et <samp>DB_PASSWORD</samp></li>
                    <li>Ajouter les détails du service de messagerie mail pour les champs <samp>MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION</samp> et <samp>MAIL_FROM_ADDRESS</samp>. À but de testing, utilisez <a href="https://mailtrap.io/">MailTrap</a></li>
                </ol>
            </li>
            <li>Migration de la base de données : <code>php artisan migrate</code></li>
            <li>[OPTIONNEL] Générer des données de test dans la base de données : <code>php artisan db:seed</code></li>
            <li>Copie du dossier images de base dans <samp>storage/</samp> : <code>cp .\images\ .\storage\app\public\ -r</code></li>
            <li>Création du lien symbolique pour le téléversement d'image dans <samp>storage/public/</samp> : <code>php artisan storage:link</code></li>
            <li>Démarrage sur le navigateur http://127.0.0.1:8000/ : <code>php artisan serve</code></li>
        </ol>
    </li>
</ol>

<hr />


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
