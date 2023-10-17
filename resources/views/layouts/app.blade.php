<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>CRUD Blog Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
              <a class="navbar-brand" href="/">Mon Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Réparations</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/vehicles">Véhicules</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/users">Utilisateurs</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container mt-5">
            @yield('content')
        </div>

    </body>

</html>