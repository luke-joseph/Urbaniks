@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/index-image.jpg'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-5xl px-2" style="background-color: rgba(239,12,91,0.4);">Urbaniks Street Skool Of Dance</h1>
          <p class="text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">creativity in movement</p>
          {{-- <a href="/register" class="mx-auto">
            <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
          </a> --}}
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-3xl text-white uppercase tracking-wide text-center mt-16 mb-8">What Our Pupils Say</h2>

    <div id="testimonial-container" class="flex w-4/6 mx-auto items-center">
      <div id="testimonial1" class="w-1/2 p-8">
        <div class="flex flex-col">
          <p class="text-white italic mb-4">I love this skool I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
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
      <div id="testimonial2" class="w-1/2 p-8">
        <div class="flex flex-col">
          <p class="text-white italic mb-4">I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
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
    <h2 class="text-3xl text-center uppercase text-white tracking-wide mb-8">Our Mission</h2>
    <p class="text-center text-white w-4/6 mx-auto text-lg">We guide our pupils of all ages to enjoy dance and movement. We provide a supportive place of expression where students can learn the art
      of dance, develop confidence and life long friendships. We bring a togetherness and community with lots of interaction through dance.

    </p>
  </div>

  <div class="flex flex-col mt-16">
    <h2 class="text-3xl text-center uppercase text-white tracking-wide mb-8">The Original Street Skool Of Dance</h2>
    <div class="flex w-5/6 mx-auto">

      <div class="w-1/2 p-4">
        <h3 class="text-2xl text-white mb-4">Est. Since 2001</h3>
        <p class="mb-0 text-white">We are one of the first schools that appeared on the scene all the way back from 2001. We have
        successfully taught over 200 pupils from all backgrounds, ages and skill level</p>
      </div>

      <div class="w-1/2 p-4">
        <h3 class="text-2xl text-white mb-4">Our Experience</h3>
        <p class="mb-0 text-white">
          We have over 30 years professional dancing experience. Study at College of London Dance. Teaching experience of over 20 years!
        </p>
      </div>
    </div>
  </div>

  <div class="flex w-full mt-16 py-8 bg-teal-200 mb-16">
    <div class="flex m-auto">

      <div class="mr-4">
        <p class="mb-0 text-2xl italic">Ready To Learn Street Dance?</p>
      </div>
      <a href="/register" class="">
        <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
      </a>

    </div>

  </div>

@endsection
