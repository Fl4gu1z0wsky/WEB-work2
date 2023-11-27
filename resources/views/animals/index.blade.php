<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<!-- ^^^^ I like this sentence, so I juste let it here ^^^^ -->

<!-- resources/views/animals/index.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Animaux</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    
    <!-- Liste les animaux -->
    <div class="container mt-5">
        <a href="{{ url('/') }}" class="btn btn-secondary float-right mb-3">Retour</a>
        <h1 class="text-center text-primary mb-4">Liste des Animaux</h1>

        <div class="list-group">
            <!-- Boucle pour afficher chaque animal -->
            @foreach ($animals as $animal)
                <div class="list-group-item">
                    <h5 class="mb-1">{{ $animal->name }}</h5>
                    <p class="mb-1">{{ $animal->species }}</p>
                    <p class="mb-1">Âge: {{ $animal->age }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Lien vers Bootstrap JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
