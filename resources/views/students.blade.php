<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alunos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h1 class="text-2xl font-bold mb-4">Alunos de {{ $master->name }}</h1>
            @foreach ($students as $student)
                
                <div class="max-w-2xl mx-auto mt-24">
                    <div
                        class="flex gap-3 bg-white border border-gray-300 rounded-xl overflow-hidden items-center justify-start">

                        <div class="relative w-32 h-32 flex-shrink-0">
                            <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50"
                                loading="lazy" src="https://via.placeholder.com/150">
                        </div>

                        <div class="flex flex-col gap-2 py-2">

                            <p class="text-xl font-bold">{{ $student->name }}</p>

                            <p class="text-gray-500">
                                O aluno {{ $student->name }} iniciou em: {{ $student->started_at->format('d/m/Y') }}
                            </p>

                            <div class="flex gap-4">

                                <a class="px-6 py-2 min-w-[120px] text-center text-gray-500 bg-violet-600 border border-violet-600 rounded active:text-violet-500 hover:bg-transparent hover:text-violet-600 focus:outline-none focus:ring"
                                    href="{{ route('student.show', $student) }}">
                                    Ver linha do tempo
                                </a>

                            </div>

                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
