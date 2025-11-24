<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mestres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if($masters->isEmpty())
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <p>Nenhum mestre cadastrado. <a href="#" class="text-blue-500">Cadastrar novo?</a></p>
                </div>
            @else
                @foreach($masters as $master)
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <h3 class="text-lg font-medium">{{ $master->name }} ({{ $master->nickname }})</h3>
                        <p class="text-sm text-gray-600">Graduação: {{ $master->graduation }}</p>
                        <a href="{{ route('master.students', $master) }}" 
                            class="mt-2 inline-block bg-blue-500 text-indigo-50 px-4 py-2 rounded">
                            Ver Alunos ({{ $master->students->count() }})
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>