  <footer class="bg-white border-t border-slate-200 py-6 z-40 relative lg:ml-64 transition-all">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-sm text-slate-500 font-medium">
                &copy; 2026 <span class="text-slate-800 font-bold">BiblioDigital</span>. Todos los derechos reservados.
            </div>
            <div class="flex items-center space-x-6 text-xs font-bold text-slate-400 tracking-widest uppercase">
                <a href="#" class="hover:text-blue-600 transition">Soporte</a>
                <a href="#" class="hover:text-blue-600 transition">Privacidad</a>
            </div>
        </div>
    </footer>

    <div id="overlay" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-30 hidden lg:hidden"></div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        function toggleMenu() {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        mobileMenuButton.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
</body>
</html>