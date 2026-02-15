<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
          <style>
        /* Suavizado y refinamiento visual */
        html { scroll-behavior: smooth; }
        body { font-feature-settings: "cv02", "cv03", "cv04"; }
        .glass-effect {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(to right, #3b82f6, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
        @endif



    </head>
    <body class="bg-slate-50 text-slate-900 font-sans antialiased">

    <header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2 group cursor-pointer">
                <div class="bg-blue-600 p-2 rounded-lg transition-transform group-hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight text-slate-800">Biblio<span class="text-blue-600">Digital</span></span>
            </div>

            <div class="hidden md:flex items-center space-x-10">
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Recursos</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Instituciones</a>
                <a href="#" class="text-sm font-semibold text-slate-600 hover:text-blue-600 transition">Ayuda</a>
                <a href="#" class="border border-blue-600 text-blue-600 px-6 py-2 rounded-full text-sm font-bold hover:bg-blue-50 transition">Acceso Usuarios</a>
            </div>

            <button id="mobile-menu-button" class="md:hidden p-2 text-slate-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </nav>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-slate-100 px-6 py-4">
            <a href="#" class="block py-3 text-slate-600 font-medium">Inicio</a>
            <a href="#" class="block py-3 text-blue-600 font-bold">Acceso Usuarios</a>
        </div>
    </header>

    <section class="relative min-h-[80vh] flex items-center bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-transparent z-10"></div>
            <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1920&q=80" class="w-full h-full object-cover" alt="Library Background">
        </div>
        
        <div class="container mx-auto px-6 relative z-20">
            <div class="max-w-2xl">
                <span class="inline-block px-4 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-400 text-xs font-bold uppercase tracking-widest mb-6">Plataforma Académica</span>
                <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight mb-8">
                    El conocimiento global a un <span class="text-blue-500">clic de distancia.</span>
                </h1>
                <p class="text-lg text-slate-300 mb-10 leading-relaxed max-w-xl">
                    Impulsamos la investigación y el aprendizaje mediante el acceso a depósitos digitales de alta calidad, garantizando la preservación cultural.
                </p>
                <div class="flex flex-wrap gap-5">
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-full font-bold transition shadow-lg shadow-blue-900/20">Explorar Catálogo</a>
                    <a href="#" class="glass-effect text-white px-10 py-4 rounded-full font-bold hover:bg-white/10 transition">Documentación</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 font-bold text-xl">01</div>
                    <h3 class="text-xl font-bold text-slate-800">Acceso Universal</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Disponible 24/7 desde cualquier dispositivo con estándares de accesibilidad internacional.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 font-bold text-xl">02</div>
                    <h3 class="text-xl font-bold text-slate-800">Curaduría Experta</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Contenido verificado por expertos académicos y bibliotecarios de amplia trayectoria.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 font-bold text-xl">03</div>
                    <h3 class="text-xl font-bold text-slate-800">Gestión de Préstamos</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Sistema automatizado de reservas y devoluciones digitales sin complicaciones.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-slate-950 text-slate-400 py-20 border-t border-slate-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-16 mb-16">
                <div class="col-span-1 lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="bg-blue-600 p-1.5 rounded text-white">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        </div>
                        <span class="text-white font-bold tracking-tight">BiblioDigital</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-6">Fomentando el avance intelectual mediante tecnología de vanguardia y bibliotecas digitales sostenibles.</p>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-6">Plataforma</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition">Catálogo Público</a></li>
                        <li><a href="#" class="hover:text-white transition">Revistas Científicas</a></li>
                        <li><a href="#" class="hover:text-white transition">Repositorios de Tesis</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Institución</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="#" class="hover:text-white transition">Sobre Nosotros</a></li>
                        <li><a href="#" class="hover:text-white transition">Términos de Servicio</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacidad</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-6">Suscripción</h4>
                    <div class="flex border border-slate-800 rounded-lg overflow-hidden">
                        <input type="email" placeholder="Email" class="bg-slate-900 px-4 py-2 w-full text-sm focus:outline-none">
                        <button class="bg-blue-600 px-4 text-white text-sm hover:bg-blue-700">Ir</button>
                    </div>
                </div>
            </div>
            
            <div class="pt-8 border-t border-slate-900 flex flex-col md:flex-row justify-between items-center gap-4 text-xs tracking-wide">
                <p>&copy; 2026 BIBLIODIGITAL. SISTEMA DE GESTIÓN BIBLIOTECARIA.</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white">TWITTER</a>
                    <a href="#" class="hover:text-white">LINKEDIN</a>
                    <a href="#" class="hover:text-white">RESEARCHGATE</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            const isOpen = !menu.classList.contains('hidden');
            icon.setAttribute('d', isOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16');
        });
    </script>
</body>
</html>
