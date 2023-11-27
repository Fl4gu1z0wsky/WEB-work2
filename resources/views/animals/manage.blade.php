<!-- resources/views/animals/manage.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les animaux</title>
    <!-- Lien vers Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <!-- Check si succès de la modification ou suppression -->
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

    <!-- Liste tous les animaux modifiables -->
    <div class="container mt-5">
    <a href="{{ url('/') }}" class="btn btn-secondary float-right mb-3">Retour</a>
        <h1 class="text-center text-primary mb-4">Gérer les Animaux</h1>

        @foreach ($animals as $animal)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $animal->name }}</h5>
                    <p class="card-text">Espèce: {{ $animal->species }}</p>
                    <p class="card-text">Âge: {{ $animal->age }}</p>
                    <p class="card-text">Pays: {{ $animal->country }}</p>
                    <p class="card-text">Commentaire: {{ $animal->comment }}</p>
                    <a href="{{ route('animals.edit', $animal->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('animals.destroy', $animal->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet animal ?')">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Lien vers Bootstrap JavaScript et jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>