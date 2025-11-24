@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">{{ $student->name }} - Timeline</h1>
    <livewire:student-timeline :student="$student" />
</div>
@endsection