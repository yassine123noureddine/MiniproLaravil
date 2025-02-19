<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Détails de l'employé</h1>
    <p><strong>Nom :</strong> {{ $employee['prenom'] }} {{ $employee['nom'] }}</p>
    <p><strong>Âge :</strong> {{ $employee['age'] }} ans</p>
    <a href="{{ url('/employee/' . $employee['id'] . '/subordinates') }}">Voir les subordonnés</a>

/////////////----Vue Liste des subordonnés d'un employé:
<h1>Subordonnés de {{ $employee['prenom'] }} {{ $employee['nom'] }}</h1>
    @if (count($employee['subordonnees']) > 0)
        <ul>
            @foreach ($employee['subordonnees'] as $subordinate)
                <li>
                    <a href="{{ url('/employee/' . $employee['id'] . '/subordinates/' . $subordinate['id']) }}">
                        {{ $subordinate['prenom'] }} {{ $subordinate['nom'] }} ({{ $subordinate['poste'] }})
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun subordonné trouvé.</p>
    @endif
/////////////----Vue détails d'un subordonné:
<h1>Détails du subordonné</h1>
    <p><strong>Nom :</strong> {{ $subordinate['prenom'] }} {{ $subordinate['nom'] }}</p>
    <p><strong>Poste :</strong> {{ $subordinate['poste'] }}</p>
    <p><strong>Rattaché à :</strong> {{ $employee['prenom'] }} {{ $employee['nom'] }}</p>
</body>
</html>