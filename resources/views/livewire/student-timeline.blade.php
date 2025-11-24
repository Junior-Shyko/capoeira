<div class="timeline">
    @foreach($timeline as $event)
        <div class="timeline-item {{ $event['type'] == 'corda' ? 'border-l-4 border-blue-500' : 'border-l-4 border-green-500' }} pl-4 mb-4">
            <div class="flex items-center">
                <div class="timeline-icon rounded-full bg-gray-200 p-2 mr-4">
                    {{ $event['type'] == 'inicio' ? '🏃' : '🧵' }}
                </div>
                <div>
                    <h3 class="font-bold">{{ $event['details'] }}</h3>
                    <p class="text-sm text-gray-600">Data: {{ $event['date']->format('d/m/Y') }}</p>
                    @if($event['type'] == 'corda')
                        <p class="text-sm">Batizado por: {{ $event['baptized_by'] }}</p>
                        @if($event['photo'])
                            <img src="{{ $event['photo'] }}" alt="Foto batizado" class="w-20 h-20 mt-2 rounded">
                        @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>