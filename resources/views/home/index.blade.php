 @extends('layout.admin')
 @section('content')
 <main class="flex-1 p-6 lg:p-10 w-full">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Panel de Control</h1>
                    <p class="text-slate-500 mt-1">Bienvenido al sistema de gestión de la biblioteca.</p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-white border border-slate-200 px-4 py-2 rounded-lg text-sm font-semibold text-slate-700 hover:bg-slate-50 transition shadow-sm">
                        <i class="fas fa-download mr-2"></i> Reporte
                    </button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-700 transition shadow-md shadow-blue-600/20">
                        <i class="fas fa-plus mr-2"></i> Nuevo Libro
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 group transition-all hover:shadow-md">
                    <div class="flex items-center justify-between relative z-10">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Usuarios Activos</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-1">1,240</h3>
                        </div>
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl transition-transform group-hover:scale-110">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs text-emerald-600 font-bold">
                        <i class="fas fa-arrow-up mr-1"></i> 12% más que el mes pasado
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 group transition-all hover:shadow-md">
                    <div class="flex items-center justify-between relative z-10">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Inventario Total</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-1">4,502</h3>
                        </div>
                        <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl transition-transform group-hover:scale-110">
                            <i class="fas fa-book-open"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs text-slate-400 font-medium">
                        Catalogados en 24 categorías
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 group transition-all hover:shadow-md">
                    <div class="flex items-center justify-between relative z-10">
                        <div>
                            <p class="text-sm font-medium text-slate-500">Préstamos Pendientes</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-1">85</h3>
                        </div>
                        <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center text-xl transition-transform group-hover:scale-110">
                            <i class="fas fa-clock"></i>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-xs text-orange-600 font-bold">
                        <i class="fas fa-exclamation-triangle mr-1"></i> 3 requieren atención inmediata
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200/60 overflow-hidden min-h-[400px] flex flex-col">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
                    <h2 class="text-lg font-bold text-slate-800">Capa de datos dinámicos</h2>
                    <div class="flex gap-2">
                        <span class="w-3 h-3 rounded-full bg-slate-200"></span>
                        <span class="w-3 h-3 rounded-full bg-slate-200"></span>
                        <span class="w-3 h-3 rounded-full bg-slate-200"></span>
                    </div>
                </div>
                <div class="flex-1 flex flex-col items-center justify-center text-slate-400 p-10">
                    <div class="bg-slate-100 p-6 rounded-full mb-4">
                        <i class="fas fa-table text-5xl opacity-20"></i>
                    </div>
                    <p class="font-medium">Tabla o Listado de Registros</p>
                    <p class="text-sm opacity-60 max-w-xs text-center mt-2">Aquí aparecerá la información dinámica de libros o usuarios según la sección seleccionada.</p>
                </div>
            </div>
        </main>
    </div>
    @endsection
