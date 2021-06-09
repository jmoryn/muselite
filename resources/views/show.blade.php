<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Muselite Songwriting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>{{$song->title}}</h1>
            <p>{{$song->tempo}} bpm</p>
            <p>Created on: {{$song->created_at}}</p>
            <hr>
            <div>
                <p>{{$song->body}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
