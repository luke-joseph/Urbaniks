@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/Balloch-Loch-Lomond.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl lg:text-5xl text-center mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Notice Board</h1>
          {{-- <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">Keep up to date with us</p> --}}
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col mb-24">
    <h2 class="text-2xl lg:text-3xl text-white uppercase tracking-wide text-center mt-16 mb-16">KEEP UP TO DATE WITH US</h2>

    <h3 class="text-2xl lg:text-3xl text-lightblue-200 uppercase tracking-wide text-center mb-8">August 2019</h3>
    <div class="flex flex-wrap w-10/12 mx-auto">
      <div class="flex w-full sm:w-1/2 md:w-1/3 h-64? px-4 py-2 mb-4" style="min-height: 16rem;">
        <div class="flex flex-col rounded bg-gray-200 border-t-4 border-lightblue-500 h-full w-full border px-4 py-3">
          <h4 class="text-xl font-bold mb-1">ENROLL SESSION FOR NEW PUPILS - BALLOCH</h4>
          <p class="text-lg font-bold text-lightblue-800 mb-4">Friday 16th August</p>
          <p class="mb-6">Pop in anytime between 3-5pm</p>
          <p class="mt-auto">LENNOX HALL, MAIN ST BALLOCH </p>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/3 h-64? px-4 py-2 mb-4" style="min-height: 16rem;">
        <div class="flex flex-col rounded bg-gray-200 border-t-4 border-lightblue-500 h-full w-full border px-4 py-3">
          <h4 class="text-xl font-bold mb-1">ENROLL SESSION FOR NEW PUPILS - MILNGAVIE</h4>
          <p class="text-lg font-bold text-lightblue-800 mb-4">Monday 19th August</p>
          <p class="mb-6">Pop in anytime between 3-5pm</p>
          <p class="mt-auto">WEST OF SCOTLAND RUGBY CLUB, MILNGAVIE</p>

        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/3 h-64? px-4 py-2 mb-4" style="min-height: 16rem;">
        <div class="flex flex-col rounded bg-gray-200 border-t-4 border-lightblue-500 h-full w-full border px-4 py-3">
          <h4 class="text-xl font-bold mb-1">WORLD CHAMPIONSHIPS 2019</h4>
          <p class="text-lg font-bold text-lightblue-800 mb-4">22nd - 25th August</p>
          <p class="mt-auto">BLACKPOOL</p>

        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/3 h-64? px-4 py-2 mb-4" style="min-height: 16rem;">
        <div class="flex flex-col rounded bg-gray-200 border-t-4 border-lightblue-500 h-full w-full border px-4 py-3">
          <h4 class="text-xl font-bold mb-1">CLASSES COMMENCE</h4>
          <p class="text-lg font-bold text-lightblue-800 mb-4">Thursday 29th August onwards </p>
          <p class="mt-auto">All locations</p>

        </div>
      </div>
    </div>

  </div>

@endsection
