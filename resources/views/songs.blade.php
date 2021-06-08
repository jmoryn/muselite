<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muselite Songwriting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>Songs:</h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        @if(count($songs) >= 1)
                            @foreach($songs as $song)
                                <div>
                                    <h4><a href="{{route('songs.show', $song->id)}}">{{$song->title}}</a></h4>
                                    <small>Written on: {{$song->created_at}}</small>
                                </div>
                            @endforeach
                        @else
                            <p>No songs yet.</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
