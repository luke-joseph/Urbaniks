@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/index-image.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <img src="/img/urbaniks-plain-ws-no-tm.png" alt="urbaniks logo" class="w-24 md:w-32 lg:w-64 mx-auto mt-12 opacity-75">
        <div class="mx-auto text-white uppercase flex flex-col">
          <h1 class="hidden sm:flex text-sm md:text-xl lg:text-xl text-center w-full mx-auto  px-2 opacity-75" style="background-color: rgba(0,0,0,0.4);">Street Skool Of Dance</h1>
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
        <img src="/img/logos/euro_champions_logo.png" alt="euro champions logo" class="w-full h-full object-contain p-4 opacity-75?">
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

  <div class="flex flex-col mt-16 mb-24">
    <div class="w-40 mx-auto mb-4">
      <img src="/img/teachers/paulandpaulineexperienced.jpg" alt="paul and pauline urbaniks">
    </div>
    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl text-center uppercase text-white tracking-wide">Our Experience</h2>

    <h4 class="text-lightblue-300 w-5/6 sm:w-2/3 mx-auto text-lg px-4 mb-6 text-center">
    Directors, Paul and Pauline Joseph est. URBANIKS in 1999
    </h4>

    <p class="text-gray-200 w-5/6 sm:w-2/3 mx-auto text-lg px-4 mb-4">
    With over 30 years experience as professional dancers, choreographers, directors, teachers, and judges they bring a wealth of knowledge to all their pupils.
    </p>

    <p class="text-gray-200 w-5/6 sm:w-2/3 mx-auto text-lg px-4 mb-4">
      They have worked for TV, Theatre, Film, Music Videos, Corporate clients as well as Opening and Closing Ceremonies including Glasgows Commonwealth Games, and The European Sports Championships.
    </p>

    <p class="text-gray-200 w-5/6 sm:w-2/3 mx-auto text-lg px-4">
      They provide dance classes for boys and girls, aged 3 to adult, beginner to advanced and recreational to professional level.
      <span class="text-lightblue-600?">To learn more about the teachers</span><a href="/teachers" target="_blank" class="bg-lightblue-300 text-black font-bold rounded px-2 text-xs ml-2">click here </a>
    </p>

  </div>

  <div class="flex flex-col mt-16">
    <div class="w-32 mx-auto mb-4">
      <img src="/img/icons/Break_dance_light.png" alt="breakdance freeze">
    </div>
    <h2 class="text-2xl lg:text-3xl text-center uppercase text-white tracking-wide mb-8">Our Mission</h2>
    <p class="text-gray-200 w-5/6 sm:w-2/3 mx-auto text-lg p-4">We guide our pupils of all ages to enjoy dance and movement. We provide a supportive place of expression where students can learn the art
      of dance, develop confidence and life long friendships. We bring togetherness and community with lots of interaction through dance.

    </p>
  </div>

  <div class="flex flex-col mt-16">
    <div class="w-40 mx-auto mb-4">
      <img src="/img/testimonials/Balloch-parade.jpg" alt="urbaniks parade">
    </div>
    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl text-white uppercase tracking-wide text-center mb-10">What Our Pupils Say</h2>

    <div id="testimonial-container" class="flex flex-col md:flex-row w-4/6 mx-auto items-center?">
      <div id="testimonial1" class="md:w-1/2 p-8 mb-6 md:mb-0">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">
            Your show is SUCH a happy life enhancing afternoon.
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
      <div id="testimonial2" class="md:w-1/2 p-8">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">
            Thank you for letting us be part of such an AMAZING dance family!
          </p>
            {{-- <div id="pupil-container2" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial5.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil Two</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div> --}}
        </div>
      </div>
      <div id="testimonial3" class="md:w-1/2 p-8">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">
            Can't wait to come back in Aug!
          </p>
            {{-- <div id="pupil-container2" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial5.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil Two</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div> --}}
        </div>
      </div>
      <div id="testimonial4" class="md:w-1/2 p-8">
        <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

        </div>
        <div class="flex flex-col">
          <p class="text-gray-200 italic mb-6 z-10">
            I think your work is amazing and you hold it all together so naturally, it really is truly excellent.
          </p>
            {{-- <div id="pupil-container2" class="flex">
              <div class="w-10 h-10">
                <img src="/img/testimonials/testimonial5.jpg" alt="" class="w-full h-full rounded-full">
              </div>
              <div class="flex flex-col ml-2 text-xs text-white">
                <p class="mb-0 text-gray-100">Pupil Two</p>
                <p class="mb-0 text-lightblue-300">Hip Hop Dance</p>
              </div>
            </div> --}}
        </div>
      </div>
    </div>

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
