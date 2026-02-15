<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioDigital  Biblioteca Municipal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Instrument Sans', sans-serif; font-feature-settings: "cv02", "cv03", "cv04"; }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased flex flex-col min-h-screen">

@yield('content')

@include('partials.auth.footer')
