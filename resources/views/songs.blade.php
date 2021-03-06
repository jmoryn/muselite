<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MuseLite Songwriting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2><a href="songs/create">Create a new Song</a></h2>
            <h2>Songs:</h2>
            @if(count($songs) > 0)
                @foreach($songs as $song)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div>
                                <h4><a href="{{route('songs.show', $song->id)}}">{{$song->title}}</a></h4>
                                <small>Written on: {{$song->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No songs yet.</p>
            @endif
        </div>
    </div>
</x-app-layout>
