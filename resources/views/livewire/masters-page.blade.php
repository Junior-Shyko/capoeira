<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Mestres') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        @if($masters->isEmpty())
            <p>Nenhum mestre...</p>
        @else
            @foreach($masters as $master)
                <div class="p-4 bg-white shadow rounded">
                     <div class="p-4 sm:p-8">
                        <h3 class="text-lg font-medium">{{ $master->name }} ({{ $master->nickname }})</h3>
                        <p class="text-sm text-gray-600">Graduação: {{ $master->graduation }}</p>
                        <a href="{{ route('master.students', $master) }}" 
                            class="mt-2 inline-block bg-blue-500 text-indigo-50 px-4 py-2 rounded">
                            Ver Alunos ({{ $master->students->count() }})
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>