@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/dancers.png'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-4xl px-2 text-center mb-4" style="background-color: rgba(239,12,91,0.4);">Our Classes</h1>
          <p class="text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">Something for everyone</p>
          {{-- <a href="/register" class="mx-auto">
            <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
          </a> --}}
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-white uppercase tracking-wide text-center mt-16 mb-8">Here You Can Find Our Timetable</h2>
    <p class="text-center text-white w-4/6 mx-auto text-lg mb-4">
      To join a class you can register online, by calling or by email...
    </p>
    <p class="text-center text-white w-4/6 mx-auto text-lg border-l-4 border-r-4 border-yellow-400 bg-gray-600 rounded py-2 mb-6">
    Our class slots can fill up quickly so please register now to avoid disappointment!
    </p>

    <a href="/register" class="mx-auto mt-4">
      <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto mb-8" type="button">register now online</button>
    </a>
  </div>

  <div id="app">
    <time-table></time-table>
  </div>

@endsection
