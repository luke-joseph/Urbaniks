@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/urbaniks-stage.png'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-xl sm:text-2xl lg:text-5xl w-3/4 sm:w-full mx-auto  px-2" style="background-color: rgba(129,222,253,0.4);">Our Gallery</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">A couple shots from events</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">

  </div>

  <div class="flex flex-col sm:w-10/12 mx-auto mt-16 mb-24">

    <div id="app">
      <gallery-component></gallery-component>
    </div>

  </div>

@endsection
