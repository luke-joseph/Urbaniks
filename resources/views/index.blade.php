@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/index-image.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <img src="/img/urbaniks-plain-ws-no-tm.png" alt="urbaniks logo" class="w-64 mx-auto mt-12">
        <div class="mx-auto text-white uppercase flex flex-col">
          <h1 class="text-xl lg:text-xl text-center w-full mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Street Skool Of Dance</h1>
          {{-- <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">creativity in movement</p> --}}

        </div>
      </div>
   </div>
  </div>

  <div id="awards-container" class="hidden sm:flex w-10/12 mx-auto">
    <div class="flex flex-wrap sm:h-32 h-full w-full mx-auto">
      <div class="w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/udo_logo.png" alt="udo logo" class="w-full h-full object-contain">
      </div>
      <div class="w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/euro_champions_logo.png" alt="" class="w-full h-full object-contain p-4 opacity-75?">
      </div>
      <div class="flex w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/bbc-logo.png" alt="" class="w-full h-full object-contain p-4 opacity-75">
      </div>
      <div class="w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/commonwealth_games.png" alt="" class="w-full h-full object-contain p-4 opacity-75?">
      </div>
      <div class="w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/xm_logo.png" alt="" class="w-full h-full object-contain p-4 opacity-75?">
      </div>
      <div class="w-1/3 sm:w-1/6 h-full">
        <img src="/img/logos/cbbc-logo.png" alt="" class="w-full h-full object-contain opacity-75?">
      </div>
    </div>

  </div>

  <div class="flex flex-col mt-24 mb-24">
    <div class="w-1/2 mx-auto mb-4">
      {{-- <img src="/img/logos/urbanikslogobuildings-white.png" alt=""> --}}
    </div>
    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl text-center uppercase text-white tracking-wide mb-8">Our Experience</h2>
    <div class="flex flex-col md:flex-row w-5/6 mx-auto">

      <div class="md:w-1/2 p-4">
        <h3 class="text-2xl text-gray-100 mb-4">Est. Since 2001</h3>
        <p class="mb-0 text-gray-200 mb-4 sm:w-11/12">We are one of the first schools that appeared on the scene all the way back from 2001. We have
        successfully taught over 200 pupils from all backgrounds, ages and skill level.</p>
        <p class="mb-0 text-gray-200 sm:w-11/12">
          Dance is great way to stay healthy, build confidence & interact with peers while having fun in this growing digital age.
        </p>
      </div>

      <div class="md:w-1/2 p-4">
        <h3 class="text-2xl text-gray-100 mb-4">Our Experience</h3>
        <p class="mb-0 text-gray-200">
          We have over 30 years experience as professional dancers, choreographers, directors, teachers, judges and lecturers in dance.
          <span class="text-lightblue-600">To learn more about the teachers</span>
           <a href="/teachers" class="bg-lightblue-300 text-black font-bold rounded px-2 text-xs">click here </a>
        </p>
      </div>
    </div>
  </div>

  <div class="flex flex-col mt-16">
    <div class="w-32 mx-auto mb-4">
      <img src="/img/icons/Break_dance_light.png" alt="">
    </div>
    <h2 class="text-2xl lg:text-3xl text-center uppercase text-white tracking-wide mb-8">Our Mission</h2>
    <p class="sm:text-center text-gray-200 w-5/6 sm:w-2/3 mx-auto text-lg p-4">We guide our pupils of all ages to enjoy dance and movement. We provide a supportive place of expression where students can learn the art
      of dance, develop confidence and life long friendships. We bring togetherness and community with lots of interaction through dance.

    </p>
  </div>

  <div class="flex flex-col">
    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl text-white uppercase tracking-wide text-center mt-16 mb-10">What Our Pupils Say</h2>

    <div id="testimonial-container" class="flex flex-col md:flex-row w-4/6 mx-auto items-center">
      <div id="testimonial1" class="md:w-1/2 p-8 mb-6 md:mb-0">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">I love this skool I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
          <div id="pupil-container1" class="flex">
            <div class="w-10 h-10">
              <img src="/img/testimonials/testimonial4.jpg" alt="" class="w-full h-full rounded-full">
            </div>
            <div class="flex flex-col ml-2 text-xs text-white">
              <p class="mb-0 text-gray-100">Pupil One</p>
              <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial2" class="md:w-1/2 p-8">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">I find everything nice and I am very happy to be hear dancing and showing you how much I love it</p>
            <div id="pupil-container2" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial5.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil Two</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>

  <div class="flex w-full mt-24 py-8 bg-gray-100 mb-16">
    <div class="flex m-auto w-10/12 md:w-auto">

      <div class="mr-4">
        <p class="mb-0 text-2xl italic text-lightblue-1000">Ready To Learn Street Dance?</p>
      </div>
      <a href="/registration" class="">
        <button class="py-2 px-4 bg-red-400 rounded-lg text-red-900 uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">contact us today</button>
      </a>

    </div>

  </div>

@endsection
