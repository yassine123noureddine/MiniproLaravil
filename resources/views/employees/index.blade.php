@extends('layouts.app')

@section('content')
    <h1>Liste des employés</h1>

    @foreach ($employees as $employee)
        <x-employee-card :employee="$employee" />
    @endforeach
@endsection

@extends('layouts.layout')

@section('title', 'Liste des employés')

@section('content')
    <h2>Gestion des Employés</h2>
    <x-alert type="success" message="Bienvenue dans l'application de gestion des employés !" />
    <x-employee-list :employees="$employees" />
@endsection

<x-alert type="success" message="Bienvenue dans l'application de gestion des employés !" />

