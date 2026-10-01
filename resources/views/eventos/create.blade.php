@extends('layouts.app')

@section('title', 'Criar Evento — FalaQ')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-900 mb-6">Criar novo evento</h1>

    <form action="{{ route('eventos.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">
                Título do evento
            </label>
            <input
                type="text"
                name="titulo"
                id="titulo"
                value="{{ old('titulo') }}"
                class="mt-1 block w-full rounded-md border bg-white px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 @error('titulo') border-red-500 @else border-gray-300 @enderror"
                placeholder="Digite o título do evento"
            >
            @error('titulo')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="descricao" class="block text-sm font-medium text-gray-700">
                Descrição
            </label>
            <textarea
                name="descricao"
                id="descricao"
                rows="5"
                class="mt-1 block w-full rounded-md border bg-white px-3 py-2 text-gray-900 shadow-sm placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 @error('descricao') border-red-500 @else border-gray-300 @enderror"
                placeholder="Descreva o evento"
            >{{ old('descricao') }}</textarea>
            @error('descricao')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="data_evento" class="block text-sm font-medium text-gray-700">
                Data do evento
            </label>
            <input
                type="date"
                name="data_evento"
                id="data_evento"
                value="{{ old('data_evento') }}"
                class="mt-1 block w-full rounded-md border bg-white px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 @error('data_evento') border-red-500 @else border-gray-300 @enderror"
            >
            @error('data_evento')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button
                type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Criar evento
            </button>
        </div>
    </form>
</div>
@endsection
