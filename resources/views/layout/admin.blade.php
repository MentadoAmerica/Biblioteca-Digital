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
        body { font-family: 'Instrument Sans', sans-serif; }
        .sidebar-item-active {
            background: #eff6ff;
            color: #2563eb;
            border-right: 4px solid #2563eb;
        }
        .glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }
    </style>
</head>
<!--body class="bg-slate-50 text-slate-900 antialiased flex flex-col min-h-screen"-->

<body class="bg-[#f8fafc] text-slate-900 antialiased min-h-screen flex flex-col">

    <header class="glass-header fixed w-full z-50">
        <div class="container mx-auto flex items-center justify-between px-6 py-3">
            <div class="flex items-center gap-3">
                <button id="mobile-menu-button" class="lg:hidden p-2 text-slate-600 hover:bg-slate-100 rounded-lg transition">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="bg-blue-600 p-1.5 rounded-lg shadow-lg shadow-blue-600/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-800">Biblio<span class="text-blue-600">Digital</span></span>
            </div>

            <nav class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-sm font-semibold text-blue-600 border-b-2 border-blue-600 pb-1">Inicio</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Usuarios</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Libros</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Préstamos</a>
                <a href="#" class="text-sm font-bold text-red-500 hover:text-red-600 transition">Salir</a>
            </nav>

            <div class="flex items-center space-x-4">
                <div class="hidden sm:flex flex-col text-right mr-2">
                    <span class="text-sm font-bold text-slate-700 leading-tight">Admin Principal</span>
                    <span class="text-xs text-slate-500">Administrador</span>
                </div>
                <div class="w-10 h-10 bg-slate-200 rounded-full border-2 border-white shadow-sm overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=2563eb&color=fff" alt="Perfil">
                </div>
            </div>
        </div>
    </header>

    <div class="flex flex-1 pt-16">
        <aside id="sidebar" class="bg-white w-64 min-h-screen border-r border-slate-200 fixed lg:sticky top-16 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-40">
            <div class="py-6 px-4">
                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mb-4 px-3">Gestión General</p>
                <nav class="space-y-1">
                    <a href="#" class="sidebar-item-active flex items-center p-3 text-sm font-semibold rounded-xl transition group">
                        <i class="fas fa-th-large mr-3 w-5 text-center"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center p-3 text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-blue-600 rounded-xl transition group">
                        <i class="fas fa-book mr-3 w-5 text-center group-hover:text-blue-600"></i>
                        Inventario Libros
                    </a>
                    <a href="#" class="flex items-center p-3 text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-blue-600 rounded-xl transition group">
                        <i class="fas fa-users mr-3 w-5 text-center group-hover:text-blue-600"></i>
                        Usuarios
                    </a>
                    <a href="#" class="flex items-center p-3 text-sm font-semibold text-slate-600 hover:bg-slate-50 hover:text-blue-600 rounded-xl transition group">
                        <i class="fas fa-exchange-alt mr-3 w-5 text-center group-hover:text-blue-600"></i>
                        Préstamos
                    </a>
                </nav>

                <p class="text-[10px] uppercase tracking-widest text-slate-400 font-bold mt-8 mb-4 px-3">Configuración</p>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center p-3 text-sm font-semibold text-slate-600 hover:bg-slate-50 rounded-xl transition">
                        <i class="fas fa-cog mr-3 w-5 text-center"></i>
                        Ajustes
                    </a>
                    <a href="{{ route('logout') }}" class="flex items-center p-3 text-sm font-semibold text-red-500 hover:bg-red-50 rounded-xl transition mt-10">
                        <i class="fas fa-sign-out-alt mr-3 w-5 text-center"></i>
                        Cerrar Sesión
                    </a>
                </nav>
            </div>
        </aside>

     
@yield('content')

@include('partials.auth.footer')