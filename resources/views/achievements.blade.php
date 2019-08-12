@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/comps/1st-place-Honeys-Perth.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl sm:text-2xl lg:text-5xl  text-center mx-auto text-center px-2" style="background-color: rgba(0,0,0,0.4);">OUR ACHIEVEMENTS</h1>
          {{-- <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">We'll Be Glad To Hear From You</p> --}}
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-2xl sm:text-3xl w-5/6 mx-auto text-white uppercase tracking-wide text-center mt-16 mb-4">Read Our Accomplishments</h2>
    <p class="text-center text-gray-200 w-4/6 mx-auto text-lg mb-4">
      We strive to get the best results from our dance classes.
    </p>

  </div>


<div class="flex flex-wrap w-10/12 lg:w-2/5 mx-auto mt-16 mb-24">
  <h4 class="text-lightblue-500 text-4xl mb-4">2018</h4>
  <ul class="flex flex-col w-full">
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      2nd in the World for U14's team.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      2nd in the World for U18's team.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      2nd in the World for Q18's quad.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      4th in the World for U18's quad.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      3rd in the World for U12's duo.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      4th in the World for U16's duo.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      7th in the World for U18's solo.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      Choreography & Performance for European Sports Championships.
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      2 more dancers developing onto professional dance colleges in London
    </li>
    <li class="text-gray-200 w-4/6? text-lg mb-2">
      Honey Joseph starred as 'Saskia' in two series of Logan High for BBC I Player
    </li>
  </ul>
</div>

@endsection
