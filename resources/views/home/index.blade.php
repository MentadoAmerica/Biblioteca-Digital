@extends('layout.admin')

@section('content')
<main class="flex-1 p-6 lg:p-10 w-full">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-slate-800 tracking-tight">Gestión de Libros</h1>
            <p class="text-slate-500 mt-1">Administra el catálogo de libros de la biblioteca</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Total de libros</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">1,247</h3>
                </div>
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl">
                    <i class="fas fa-book"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-xs text-emerald-600 font-bold">
                <i class="fas fa-arrow-up mr-1"></i> 5.2% desde el mes pasado
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Libros prestados</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">189</h3>
                </div>
                <div class="w-12 h-12 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center text-xl">
                    <i class="fas fa-exchange-alt"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-xs text-rose-500 font-bold">
                <i class="fas fa-arrow-down mr-1"></i> 2.1% desde el mes pasado
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Usuarios activos</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">543</h3>
                </div>
                <div class="w-12 h-12 bg-emerald-50 text-emerald-600 rounded-xl flex items-center justify-center text-xl">
                    <i class="fas fa-users"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-xs text-emerald-600 font-bold">
                <i class="fas fa-arrow-up mr-1"></i> 12.7% desde el mes pasado
            </div>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/60 transition-all hover:shadow-md">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">Devoluciones pendientes</p>
                    <h3 class="text-3xl font-bold text-slate-800 mt-1">24</h3>
                </div>
                <div class="w-12 h-12 bg-rose-50 text-rose-600 rounded-xl flex items-center justify-center text-xl">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-xs text-rose-500 font-bold">
                <i class="fas fa-arrow-up mr-1"></i> 3.4% desde ayer
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200/60 overflow-hidden">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center">
            <h2 class="text-lg font-bold text-slate-800">Lista de Libros</h2>
            <a href="{{route('libros.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-blue-700 transition flex items-center shadow-md shadow-blue-600/20">
                <i class="fas fa-plus mr-2"></i> Agregar libro
            </a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/50">
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">Título</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">Autor</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">ISBN</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">Categoría</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">Disponibilidad</th>
                        <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider border-b border-slate-100">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @foreach($libros as $libro)
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-6 py-4 text-sm text-slate-700 font-medium">{{$libro->nombre}}</td>
                        <td class="px-6 py-4 text-sm text-slate-600">{{$libro->autor}}</td>
                        <td class="px-6 py-4 text-sm text-slate-600 font-mono">{{$libro->isbn}}</td>
                        <td class="px-6 py-4">
                          <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-600">
                             {{ $libro->categoria->nombre }}
                        </span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-50 text-emerald-600">Disponible</span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <div class="flex gap-3">
                                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Editar</a>
                                <a href="#" class="text-rose-500 hover:text-rose-700 font-medium">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border-t border-slate-100 bg-slate-50/30 flex justify-end">
            <nav class="flex gap-2">
                <button class="px-3 py-1 border border-slate-200 rounded-md text-sm hover:bg-white transition">Anterior</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm">1</button>
                <button class="px-3 py-1 border border-slate-200 rounded-md text-sm hover:bg-white transition">Siguiente</button>
            </nav>
        </div>
    </div>
</main>
@endsection