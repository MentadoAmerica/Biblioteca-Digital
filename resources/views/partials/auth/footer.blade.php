<footer class="bg-slate-950 text-slate-400 py-20 border-t border-slate-900 mt-auto">
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