@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/index-image.jpg'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-4xl px-2" style="background-color: rgba(239,12,91,0.4);">Urbaniks Street Skool Of Dance</h1>
          <p class="text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">creativity in movement</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-white uppercase tracking-wide text-center mt-16 mb-8">What Our Pupils Say</h2>

    <div id="testimonial-container" class="flex w-11/12 mx-auto">
      <div id="testimonial1" class="w-1/2 border p-8">
        <div class="flex flex-col border border-red-400">
          <p class="text-white italic">I love this skool I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
          <div id="pupil-container1" class="flex">
            <div class="w-10 h-10 bg-white rounded-full">
              {{-- <img src="" alt=""> --}}
            </div>
            <div class="flex flex-col ml-2 text-xs text-white">
              <p class="mb-0">Pupil One</p>
              <p class="mb-0">Hip Hop Dance</p>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial2" class="w-1/2 border p-8">
        <div class="flex flex-col border border-red-400">
          <p class="text-white italic">I love this skool even more and I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
            <div id="pupil-container2" class="flex">
              <div class="w-10 h-10 bg-white rounded-full">
                {{-- <img src="" alt=""> --}}
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0">Pupil Two</p>
                <p class="mb-0">Hip Hop Dance</p>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>

  <div class="flex flex-col mt-16">
    <h2 class="text-center uppercase text-white tracking-wide">The Original Street Skool Of Dance</h2>
  </div>

@endsection
