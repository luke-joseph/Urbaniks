@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/classes.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl lg:text-5xl text-center w-full mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Our Classes</h1>
          <p class="hidden sm:flex text-center italic text-2xl text-gray-200 mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">Something for everyone</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="w-5/6 mx-auto text-2xl lg:text-3xl sm:text-3xl text-gray-100 uppercase tracking-wide text-center mt-16 mb-8 px-3">Here You Can Find Our Timetable</h2>
    <p class="text-center text-gray-300 w-4/6 mx-auto text-lg mb-8 sm:mb-4">
      Get in touch to join a class and we will guide you through every step.
    </p>

    <a href="/contact" class="mx-auto mt-4">
      <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">contact us now</button>
    </a>
  </div>

  <div id="app">
    <time-table></time-table>
  </div>

  <p class="text-center text-lightblue-200 italic font-semibold w-5/6 sm:w-1/2 mx-auto text-lg border-blue-400 rounded py-4 px-10 mb-32 mt-12">
  Our class slots can fill up quickly so contact us now to avoid disappointment!
  </p>

  <div class="flex flex-wrap w-11/12 mx-auto mt-16 mb-24">

  <div class="flex flex-col md:w-1/2 pl-4 sm:pl-0">

    <div id="testimonial1" class="md:w-1/2 p-8 mb-6 md:mb-0">
      <div style="opacity: 0.3; margin-top: -50px; margin-bottom: -50px; margin-left: -30px; height: 100px; width: 100px; background-image: url('/img/icons/quote-left-slant.png'); background-size: 100px 100px; background-repeat: no-repeat;" >

      </div>
      <div class="flex flex-col">
        <p class="text-gray-200 italic mb-6 z-10">
          Can you thank Paul - Markus is loving his class, and I am so proud of how confident he is now.
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
          ...really impressed with the level of talent.
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

    <div class="flex flex-col">
      <div class="">
      <img src="/img/icons/bboy-freeze-small.png" alt="breakdance freeze">
      </div>
      <div class="px-4 py-6 flex flex-col bg-gray-800 rounded sm:w-1/2">
        <div class="text-white mb-4">
          <h4 class="uppercase font-bold tracking-wide mb-2 text-gray-100">Start Learning Street Dance Today</h4>
          <p class="text-gray-300">We are World Street Dance Championships qualifiers in 2012, 2013, 2014, 2015, 2016, 2017, 2018 and 2019.</p>
        </div>
        <a href="/contact" class="mr-auto">
          <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">contact us today</button>
        </a>
      </div>
    </div>
  </div>

  <div class="flex flex-col md:w-1/2 mt-12 md:mt-0">
    <h2 class="text-2xl lg:text-3xl uppercase text-gray-100 sm:text-right tracking-wide mb-8 w-full pl-4">Our Dance Studios</h2>

    <div class="flex flex-col studio-container mb-8">
      <div class="ml-auto">
        <iframe width="320" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G83%208AZ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <ul class="text-right text-gray-300 mt-3">
        <li>The Lennox Hall</li>
        <li>Main Street, Jamestown</li>
        <li>Balloch</li>
        <li>G83 8AZ</li>
      </ul>
  </div>

  <div class="flex flex-col studio-container mb-8">
    <div class="ml-auto">
      <iframe width="320" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G62%206AQ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <ul class="text-right text-gray-300 mt-3">
      <li>West Rugby Club, Glasgow Rd</li>
      <li>Milngavie, East Dunbartonshire</li>
      <li>G62 6AQ</li>
    </ul>
</div>

<div class="flex flex-col studio-container mb-8">
  <div class="ml-auto">
    <iframe width="320" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G61%203DF&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  </div>
  <ul class="text-right text-gray-300 mt-3">
    <li>Allander Leisure Centre</li>
    <li>Milngavie Rd</li>
    <li>Milngavie, Glasgow</li>
    <li>G61 3DF</li>
  </ul>
</div>

<div class="flex flex-col studio-container">
  <div class="ml-auto">
    <iframe width="320" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=THE%20SCOUT%20HALL%2C%20MAIN%20ST.%20MILNGAVIE%2C%20G62%206BX&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  </div>
  <ul class="text-right text-gray-300 mt-3">
    <li>The Scout Hall</li>
    <li>Main St.</li>
    <li>Milngavie, Glasgow</li>
    <li>G62 6BX</li>
  </ul>
</div>
  </div>

  </div>

@endsection
