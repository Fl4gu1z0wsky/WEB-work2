<!-- resources/views/animals/create.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un animal</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Check si succès de l'ajout -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Check si une erreur s'est produite -->
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <!-- Formulaire d'ajout d'animal -->
    <div class="container mt-5">
        <a href="{{ url('/') }}" class="btn btn-secondary float-right mb-3">Retour</a>
        <h1 class="text-center text-primary mb-4">Ajouter un Animal</h1>

        <form action="{{ route('animals.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom (3 à 16 caractères avec trait d'union si besoin):</label>
                <input type="text" name="name" class="form-control" pattern="^[a-zA-Z\-]+$" minlength="3" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="species">Espèce (3 à 16 caractères avec trait d'union si besoin):</label>
                <input type="text" name="species" class="form-control" pattern="^[a-zA-Z\-]+$" minlength="3" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="sexe">Sexe :</label>
                <select name="sexe" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Femelle</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age">Âge (0 à 300):</label>
                <input type="number" name="age" class="form-control" min=0 max=300 required>
            </div>
            <div class="form-group">
                <label for="country">Pays (3 à 25 caractères avec trait d'union et espace si besoin):</label>
                <input type="text" name="country" pattern="^[a-zA-Z\-\s]+$" minlength="3" maxlength="25" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire (50 caractères maximum):</label>
                <textarea name="comment" minlength="0" maxlength="50" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    
    <!-- Lien vers Bootstrap JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>