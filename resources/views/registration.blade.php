@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/urbaniks-stage.png'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-4xl px-2 text-center mb-4" style="background-color: rgba(129,222,253,0.4);">Register Today</h1>
          <p class="text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">Let's start dancing</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-3xl text-white uppercase tracking-wide text-center mt-16 mb-8">Registration Is Easy </h2>
    <p class="text-center text-gray-200 w-10/12 mx-auto text-lg mb-4">
      You can register to one of our classes by filling the form below.
    </p>
    <p class="text-center text-gray-200 w-10/12 mx-auto text-lg mb-4">
      We will call you back to finalise the registration.
    </p>

    <p class="text-center text-gray-200 w-10/12 mx-auto text-lg mb-24">
      If you prefer you can call us directly to register. <span class="font-semibold text-lightblue-300">07780 992 295</span>
    </p>

  </div>

  <div class="w-10/12 mx-auto text-white text-xl">
  <p class="pl-4 mb-4 font-bold tracking-wider">ONLINE REGISTRATION FORM</p>
  </div>

  <div class="flex flex-col sm:flex-row py-8 rounded border-b border-t border-gray-600 w-10/12 mx-auto">
    <div class="flex flex-col sm:w-1/3 px-8">
      <p class="mb-2 text-white text-xl tracking-wide">
        PUPIL DETAILS
      </p>
      <p class="text-lightblue-300 font-semibold text-sm bg-black p-4 rounded">
        If you are under the age of 13 you need a guardian to help you register.
        </p>
      </div>
      <div class="flex flex-col w-2/3 mx-auto mt-8 sm:mt-0 mb-4 sm:mb-0 sm:mx-0 sm:pl-24">
        <div class="flex mb-4">
          <div>
            <legend for="artist_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Pupil Name*</legend>
            <input id="artist_name" class="bg-grey-200 pl-2 py-4 h-6 border border-grey-300 rounded" placeholder="Name">
          </div>
          <div class="ml-6">
            <legend for="artist_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Pupil Age*</legend>
            <input id="artist_name" class="bg-grey-200 pl-2 py-4 h-6 border border-grey-300 rounded" placeholder="Age">
          </div>
        </div>
        <div class="flex mb-4">
          <div>
            <legend for="city" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Guardian Name</legend>
            <input id="city" name="city" class="bg-grey-200 pl-2 py-4 h-6 border border-grey-300 rounded" placeholder="Guardian Name">
          </div>
        </div>
        <div class="mb-4">
          <div class="form-group">
            <legend for="city" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">I want to register to class*</legend>
            <select id="country" name="country" class="bg-grey-200 pl-2 h-8 border border-grey-300 rounded">
              <option value="Australia">Breakdance - s5 +</option>
              <option value="Austria">Hip Hop - s1 - s3</option>
              <option value="Belgium">Contemporary - y1 - 5</option>
              <option value="Belgium">I'm not sure</option>
            </select>
          </div> <!---->
        </div>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row pb-4 rounded w-10/12 mx-auto mb-24 pt-8">
      <div class="flex flex-col sm:w-1/3 px-8">
        <p class="mb-2 text-white text-xl tracking-wide">
          YOUR CONTACT DETAILS
        </p>
        <p class="text-gray-300 text-sm">
          This information we will use to contact you and go over all the details you need to know and confirm your registration.
          </p>
        </div>
        <div class="flex flex-col w-2/3 mx-auto mt-8 sm:mt-0 mb-4 sm:mb-0 sm:mx-0 sm:pl-24">
          <div class="flex flex-wrap mb-4">
            <div>
              <legend for="artist_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Contact Number*</legend>
              <input id="artist_name" class="bg-grey-200 pl-2 py-4 h-6 border border-grey-300 rounded" placeholder="07...">
            </div>
            <div class="ml-6">
              <legend for="artist_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Preferred Contact Time</legend>
              <input id="artist_name" class="bg-grey-200 pl-2 py-4 h-6 border border-grey-300 rounded" placeholder="eg. After 6pm">
            </div>
            <div class="flex flex-col items-stretch w-full mb-3 relative mt-4">
              <label class="mb-1 pl-1 text-white" for="message">Additional Message</label>
              <textarea rows="4" cols="50" name="message" class="w-2/3 leading-normal border border-grey-300 rounded p-3 relative focus:border-blue focus:shadow" placeholder="Want to leave an additional message? [optional]..."></textarea>
            </div>
          </div>
          <a href="/register" class="">
            <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">register now</button>
          </a>
        </div>
      </div>

@endsection
