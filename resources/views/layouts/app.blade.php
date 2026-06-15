<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Koe Bi Suy Basile — Développeur Full Stack & Intelligence Artificielle, Abidjan Côte d'Ivoire">
    <meta name="keywords" content="développeur Laravel, PHP, Python, IA, GenAI, Côte d'Ivoire, Abidjan">
    <meta property="og:title" content="Koe Bi Suy Basile — Développeur Full Stack & IA">
    <meta property="og:description" content="Portfolio professionnel de Basile, développeur Full Stack et expert IA basé à Abidjan.">
    <meta property="og:type" content="website">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Koe Bi Suy Basile — Développeur Full Stack & IA')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <!-- CSS principal -->
    <link rel="stylesheet" href="/css/app.css">
    
    @stack('styles')
</head>
<body>

    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Contenu principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Alpine.js pour les interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- JS principal -->
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>