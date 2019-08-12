@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/index-image.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl lg:text-5xl text-center w-full mx-auto px-2" style="background-color: rgba(0,0,0,0.4);">Our Teachers</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">highly experienced professionals</p>
        </div>
      </div>
   </div>
  </div>


    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl sm:text-3xl text-gray-400 uppercase tracking-wide text-center mt-16 mb-8 px-3">Click a teacher to read more</h2>

  <div id="app">
    <teachers-info></teachers-info>
  </div>

  <div class="flex w-full mt-24 py-8 bg-gray-100 mb-16">
    <div class="flex m-auto w-10/12 md:w-auto">

      <div class="mr-4">
        <p class="mb-0 text-2xl italic text-lightblue-1000">Ready To Learn Street Dance?</p>
      </div>
      <a href="/contact" class="">
        <button class="py-2 px-4 bg-red-400 rounded-lg text-red-900 uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">contact us today</button>
      </a>

    </div>

  </div>

@endsection
