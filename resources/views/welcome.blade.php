<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Inclure le lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Page d'accueil -->
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4 text-primary">Bienvenue dans mon petit zoo !</h1>
            <p class="lead">Cliquez sur les boutons ci-dessous pour intéragir avec les animaux.</p>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ url('/animals') }}" class="btn btn-primary btn-lg mr-3">Voir la liste des animaux</a>
            <a href="{{ url('/add-animal') }}" class="btn btn-success btn-lg mr-3">Ajouter un animal</a>
            <a href="{{ url('/manage-animals') }}" class="btn btn-danger btn-lg">Modifier un animal</a>
        </div>
    </div>

    <!-- Inclure le lien vers Bootstrap JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
