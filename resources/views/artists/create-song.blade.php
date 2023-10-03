@extends('layouts.main')

@section('content')
<div class="w-full">
    <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">ADD New SONG</h2>
    <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
        <form action="{{ route('artists.songs.store' , ['artist' => $artist]) }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 font-bold text-gray-600">Artist Name</label>
               <sapn> {{ $artist->name }}</sapn>
            </div>

            <div class="mb-5">
                <label for="title" class="block mb-2 font-bold text-gray-600">Song Title</label>
                @error('title')
                    <div class="text-red-600 text-sm">
                        {{$message}} 
                    </div> 
                @enderror
                <input type="text" id="title" name="title"
                        value="{{old('title', '')}}"
                       autocomplete="off" placeholder="Put in song title" 
                       class="border border-gray-300 @error('title') borfer-gray-300 @enderror shadow p-3 w-full rounded mb-">
            </div>

            <div class="mb-5">
                <label for="duration" class="block mb-2 font-bold text-gray-600">Song Duration (seconds)</label>
                @error('duration')
                <div class="text-red-600 text-sm">
                        {{$message}} 
                    </div> 
                @enderror
                <input type="number" id="duration" name="duration"
                value="{{old('title', 'duration')}}"
                       autocomplete="off" placeholder="Put in song duration in seconds" 
                       class="border border-gray-300 @error('duration') border-red-400 @enderror shadow p-3 w-full rounded mb-">
            </div>


            <button type="submit" class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
        </form>
    </div>
</div>

@endsection