@props(['employee'])
<div class="employee-card card">
    <h3>{{ $employee['prenom'] }} {{ $employee['nom'] }}</h3>
    <p><strong>Âge : </strong>{{ $employee['age'] }}</p>
    <p><strong>Poste : </strong>{{ $employee['poste'] }}</p>
    {{-- <a href="{{route('employees') }}">Voir la liste des employés</a> --}}
    <a href="{{route('employees') }}">Voir la liste des employés</a>
</div>
