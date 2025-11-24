<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto p-4">
            <h1 class="text-2xl font-bold mb-4">Alunos de {{ $master->name }}</h1>
            @foreach ($students as $student)
                <div class="bg-white p-4 mb-4 rounded shadow">
                    <h2 class="text-xl">{{ $student->name }}</h2>
                    <p>Iniciou: {{ $student->started_at->format('d/m/Y') }}</p>
                    <a href="{{ route('student.show', $student) }}" 
                    class="bg-green-500 text-indigo-50 px-4 py-2 rounded">Ver
                        Timeline</a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
