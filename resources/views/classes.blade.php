@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/dancers.png'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-4xl px-2 text-center mb-4" style="background-color: rgba(129,222,253,0.4);">Our Classes</h1>
          <p class="text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">Something for everyone</p>
          {{-- <a href="/register" class="mx-auto">
            <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
          </a> --}}
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-3xl text-gray-100 uppercase tracking-wide text-center mt-16 mb-8">Here You Can Find Our Timetable</h2>
    <p class="text-center text-gray-300 w-4/6 mx-auto text-lg mb-4">
      To join a class you can register online, by calling or by email...
    </p>
    <p class="text-center text-lightblue-900 font-semibold w-1/2 mx-auto text-lg border-l-4 border-r-4 border-blue-400 bg-gray-200 rounded py-4 px-10 mb-6">
    Our class slots can fill up quickly so please register now to avoid disappointment!
    </p>

    <a href="/register" class="mx-auto mt-4">
      <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register now online</button>
    </a>
  </div>

  <div id="app">
    <time-table></time-table>
  </div>

  <div class="flex w-10/12 mx-auto mt-16 mb-24">

  <div class="flex flex-col w-1/2">
    <h2 class="text-3xl uppercase text-white tracking-wide mb-8">Our Calendar</h2>
    <p class="text-white mx-auto text-lg mb-2">
      We run classes all year round following the school schedule.
    </p>
    <p class="text-white mx-auto text-lg">
      Please take note of our holiday periods where no classes take place:
    </p>
    <div class="flex">
      <ul class="text-white text-lg mt-8 mb-12 p-8 rounded bg-gray-800 w-1/2">
        <h4 class="mb-4 uppercase font-bold tracking-wider text-lg">Holidays</h4>
        <li class="mb-2 text-base">Jan 1st - Jan 3rd</li>
        <li class="mb-2 text-base">Mar 28th - Apr 14th</li>
        <li class="mb-2 text-base">Jul 1st - Jul 14th</li>
        <li class="text-base">Dec 21st - Dec 27th</li>
      </ul>
    </div>

    <div class="flex flex-col">
      <div class="">
      <img src="/img/icons/bboy-freeze-small.png" alt="">
      </div>
      <div class="px-4 py-6 flex flex-col bg-gray-800 rounded w-1/2">
        <div class="text-white mb-4">
          <h4 class="uppercase font-bold tracking-wide mb-2">Start Learning Street Dance Today</h4>
          <p class="">We are World Street Dance Championships qualifiers in 2012, 2013, 2014, 2015, 2016, 2017 and 2018.</p>
        </div>
        <a href="/registration" class="mr-auto">
          <button class="py-2 px-4 bg-red-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
        </a>
      </div>
    </div>
  </div>

  <div class="flex flex-col w-1/2">
    <h2 class="text-3xl uppercase text-white text-right tracking-wide mb-8 w-full">Our Dance Studios</h2>

    <div class="flex flex-col studio-container mb-8">
      <div class="ml-auto">
        <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G83%208AZ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <ul class="text-right text-white mt-3">
        <li>Urbaniks Street Skool of Dance, The Lennox Hall</li>
        <li>Main Street, Jamestown</li>
        <li>Ballock</li>
        <li>G83 8AZ</li>
      </ul>
  </div>

  <div class="flex flex-col studio-container mb-8">
    <div class="ml-auto">
      <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Auchenhowie%20Road%2C%20%20Milngavie%2C%20%20East%20Dunbartonshire%2C%20%20G62%206EJ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <ul class="text-right text-white mt-3">
      <li>Milngavie and Bearsden Sports Club</li>
      <li>Auchenhowie Road</li>
      <li>Milngavie, East Dunbartonshire</li>
      <li>G62 6EJ</li>
    </ul>
</div>

<div class="flex flex-col studio-container">
  <div class="ml-auto">
    <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=SDTA%20101%20Park%20Road%2C%20%20Glasgow%2C%20%20G4%209JE&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  <ul class="text-right text-white mt-3">
    <li>Scottish Dance Teachers Association</li>
    <li>101 Park Road</li>
    <li>Glasgow</li>
    <li>G4 9JE</li>
  </ul>
</div>
  </div>

  </div>

@endsection
