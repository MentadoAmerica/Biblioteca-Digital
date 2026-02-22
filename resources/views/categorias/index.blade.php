@extends('layout.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Categorías</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Agregar categoría
        </a>
        
        <br><br>

        <div class="bg-white shadow-md rounded-lg p-6">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b text-left">ID</th>
                        <th class="px-4 py-2 border-b text-left">Nombre</th>
                        <th class="px-4 py-2 border-b text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $categoria->id }}</td>
                            <td class="px-4 py-2 border-b">{{ $categoria->nombre }}</td>
                            <td class="px-4 py-2 border-b">
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded mr-2">
                                    Editar
                                </a>

                      <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline-block">                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-blue-800 hover:bg-black text-white font-bold py-1 px-3 rounded">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection