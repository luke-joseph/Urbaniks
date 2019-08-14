@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/urbaniks-stage.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl sm:text-2xl lg:text-5xl sm:w-3/4 text-center sm:w-full mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Our Gallery</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">A couple shots from events</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">

  </div>

  <div class="flex flex-col sm:w-10/12 mx-auto mt-16 mb-24">

    <div id="app" class="mb-24">
      <gallery-component></gallery-component>
    </div>

    <div id="testimonials" class="flex w-10/12 mx-auto">
      <div class="flex flex-wrap md:w-1/2? pl-4 sm:pl-0">

        <div id="testimonial1" class="md:w-1/2 p-8 mb-6 md:mb-0">
          <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('/img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

          </div>
          <div class="flex flex-col">
            <p class="text-gray-200 italic mb-6 z-10">
              What a fabulous show today! They are always good but this one was on a different level.
            </p>
            {{-- <div id="pupil-container1" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial4.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil One</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div> --}}
          </div>
        </div>

        <div id="testimonial2" class="md:w-1/2 p-8 mb-6 md:mb-0">
          <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('/img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

          </div>
          <div class="flex flex-col">
            <p class="text-gray-200 italic mb-6 z-10">
              Thank you! What a show! You and Paul really are an amazing duo - So much love for what you guys do.
            </p>
            {{-- <div id="pupil-container1" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial4.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil One</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>


  </div>

@endsection
