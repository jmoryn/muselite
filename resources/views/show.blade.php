<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muselite Songwriting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{$song->id}}/edit"><x-button class="ml-3">Edit song</x-button></a>
            <hr>
            <h1>{{$song->title}}</h1>
            <p>{{$song->tempo}} bpm</p>
            <p>Created on: {{$song->created_at}}</p>
            <hr>
            <div>
                <p>{{$song->body}}</p>
            </div>
            <hr>
            <form method="POST" action="{{route('songs.destroy', $song->id)}}">
                @method('DELETE')
                @csrf
                <x-button class="ml-3">
                    {{ __('Delete Song') }}
                </x-button>
            </form>
        </div>
    </div>
</x-app-layout>
