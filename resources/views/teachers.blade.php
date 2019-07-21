@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/index-image.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-xl sm:text-2xl lg:text-5xl w-3/4 sm:w-full mx-auto text-center px-2" style="background-color: rgba(0,0,0,0.4);">Our Teachers</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">highly experienced professionals</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col mt-16">

    <div class="w-32 mx-auto mb-4">
      <img src="/img/pp.jpg" alt="paul and pauline urbaniks">
    </div>
    <h2 class="w-5/6 mx-auto text-3xl text-center uppercase text-white tracking-wide mb-2">PAUL AND PAULINE JOSEPH</h2>
    <h3 class="w-5/6 mx-auto text-1xl text-lightblue-300 text-center uppercase text-white tracking-wide mb-8">Urbaniks Directors, Choreographers, Teachers</h3>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      Paul and Pauline Joseph have over 30 years experience as professional dancers, choreographers, directors, teachers, judges and lecturers in dance.
    </p>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      They met during their training at the world renowned London Contemporary Dance School in 1988. On graduating, they performed with various dance companies and choreographers, working in Europe and The UK.
    </p>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      By the early 90’s they established their own dance company, Kultyer Dance Theatre, and were the first Scottish based artists to merge Street Dance with their contemporary training, leading the way north of the border in Street Dance fusion.
    </p>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      Having toured with Kultyer to Canada, America, Australia, and all over Europe, the couple decided to start their own dance school, Urbaniks – which is now in it’s 15th successful year. Over the last decade, Paul and Pauline have trained dancers to a World class level, currently ranked 2nd in the World at the 2018 UDO World Street Dance Championships, and 12 of their dancers are now in professional dance employment or training.
    </p>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      They devised and created the Street Dance syllabus for Scottish Dance Teachers Alliance, examinations.
    </p>
    <p class="sm:w-1/2 mb-4 text-gray-200 w-5/6 mx-auto text-lg">
      Experienced choreographers and performers in TV, Film, Theatre, Music Videos, festivals and Sports Ceremonies – Performance Captains at the Glasgow 2014 Commonwealth Games Closing Ceremony; Choreographed and provided dancers for The World Youth Netball Opening Ceremony and The 2018 European Sports Championships Opening and Closing Ceremonies.
    </p>
  </div>

  <div class="flex w-full mt-24 py-8 bg-gray-100 mb-16">
    <div class="flex m-auto w-10/12 md:w-auto">

      <div class="mr-4">
        <p class="mb-0 text-2xl italic text-lightblue-1000">Ready To Learn Street Dance?</p>
      </div>
      <a href="/registration" class="">
        <button class="py-2 px-4 bg-red-400 rounded-lg text-red-900 uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register today</button>
      </a>

    </div>

  </div>

@endsection
