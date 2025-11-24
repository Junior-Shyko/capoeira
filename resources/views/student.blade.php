<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="container mx-auto p-4">
                <h1 class="text-2xl font-bold mb-4">{{ $student->name }} - Timeline</h1>
                <livewire:student-timeline :student="$student" />
            </div>
        </div>
    </div>
</x-app-layout>
