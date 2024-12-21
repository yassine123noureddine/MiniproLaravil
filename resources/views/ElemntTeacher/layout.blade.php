<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Add CSS Links -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa6jmoFq6DY9jTg43FY9HEb60zZLSOtk9kT5VdQl5CRVtxzKSZ93bSM9F9v" crossorigin="anonymous">

<!-- Optional Bootstrap JavaScript (for interactive components like modals) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT9FhF0hX7PPnpk17EZ8smRF4p5poS4d9z0etT97onD2" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <h1>My Laravel Website</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <p>&copy; 2024 My Laravel Website</p>
    </footer>
</body>
</html>
