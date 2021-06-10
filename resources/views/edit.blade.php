<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('MuseLite Songwriting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{route('songs.update', $song->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-rows-2 gap-6">
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <x-label for="title"/>
                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{$song->title}}" />
                                </div>
                                <div>
                                    <x-label for="tempo" />
                                    <x-input id="tempo" class="block mt-1 w-full" type="text" name="tempo" value="{{$song->tempo}}" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <x-label for="body" />
                            <textarea id="body" name="body" class="resize-y w-full border rounded-md" >{{$song->body}}</textarea>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Update Song') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
