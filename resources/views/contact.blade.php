@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/coffee-contact.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl sm:text-2xl lg:text-5xl sm:w-3/4 text-center mx-auto text-center px-2" style="background-color: rgba(0,0,0,0.4);">Contact Us</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">We'll Be Glad To Hear From You</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-2xl sm:text-3xl w-5/6 mx-auto text-white uppercase tracking-wide text-center mt-16 mb-8">We can't wait to hear from you!</h2>
    <p class="text-center text-gray-200 w-4/6 mx-auto text-lg mb-4">
      You can contact us by email phone or just by dropping in on our classes...
    </p>

  </div>

  <div class="mb-1">

    @include('layouts.errors')
    @include('layouts.status')
    @include('layouts.error-status')

    <div class="mx-auto relative p-8 sm:w-1/2 bg-grey-100 rounded-b-lg z-30">
      <form id="subscription-form" action="/contact" method="POST">
        @csrf
      <div class="flex flex-wrap items-stretch w-full mb-5 relative">
        <div class="w-full sm:w-1/2 flex flex-col">
          <label class="mb-1 pl-1 text-white" for="name">Your Name *</label>
          <input type="name" name="name" value="{{ old('name') }}" class="sm:mr-4 leading-normal border h-10 border-gray-300 rounded bg-gray-100 px-3 relative focus:border-blue focus:shadow" placeholder="Name">
        </div>
        <div class="w-full sm:w-1/2 flex flex-col mt-6 mb-2 sm:mt-0 sm:mb-0">
          <label class="mb-1 pl-1 text-white" for="email">Your Email *</label>
          <input type="email" name="email" value="{{ old('email') }}" class="leading-normal border h-10 border-gray-300 rounded px-3 bg-gray-100 relative focus:border-blue focus:shadow" placeholder="Email">
       </div>
      </div>

      <div class="flex flex-col items-stretch w-full mb-3 relative">
        <label class="mb-1 pl-1 text-white" for="message">Your Message *</label>
        <textarea rows="6" cols="50" value="{{ old('message') }}" name="message" class="w-full leading-normal border border-gray-300 rounded p-3 bg-gray-100 relative focus:border-blue focus:shadow" placeholder="Type your message here..."></textarea>
      </div>

      @captcha

    <button type="submit" class="mt-4 py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto">Send Message</button>

  </form>
  </div>
</div>

<div class="flex flex-wrap w-11/12 sm:w-10/12 mx-auto mt-16 mb-24">

<div class="flex flex-col sm:w-1/2">
  <h2 class="text-3xl uppercase text-white tracking-wide mb-4">Other Methods</h2>
  <div class="flex">
    <ul class="text-white text-lg mb-24 p-8 rounded bg-gray-800">
      <li class="flex mb-4 text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-phone-ring w-8 h-8 mr-4"><path class="primary" d="M4 2h4a1 1 0 0 1 .98.8l1 5a1 1 0 0 1-.27.9l-2.52 2.52a12.05 12.05 0 0 0 5.59 5.59l2.51-2.52a1 1 0 0 1 .9-.27l5 1c.47.1.81.5.81.98v4a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2z"/><path class="secondary" d="M22 10a1 1 0 0 1-2 0 6 6 0 0 0-6-6 1 1 0 0 1 0-2 8 8 0 0 1 8 8zm-4 0a1 1 0 0 1-2 0 2 2 0 0 0-2-2 1 1 0 0 1 0-2 4 4 0 0 1 4 4z"/></svg>
        07780 992 295
      </li>
      <li class="flex mb-2 text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="icon-mail w-8 h-8 mr-4"><path class="primary" d="M22 8.62V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.62l9.55 4.77a1 1 0 0 0 .9 0L22 8.62z"/><path class="secondary" d="M12 11.38l-10-5V6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v.38l-10 5z"/></svg>
         <a href="mailto:info@urbaniks.co.uk?Subject=Hello" class="text-gray-100">info@urbaniks.co.uk</a>
      </li>
    </ul>
  </div>

</div>

<div class="flex flex-col sm:w-1/2">
  <h2 class="text-3xl uppercase text-white sm:text-right tracking-wide mb-8 w-full">Our Dance Studios</h2>

      <div class="flex flex-col studio-container mb-8">
        <div class="ml-auto">
          <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G83%208AZ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
        <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G62%206AQ&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
      <ul class="text-right text-gray-300 mt-3">
        <li>West Rugby Club, Glasgow Rd</li>
        <li>Milngavie, East Dunbartonshire</li>
        <li>G62 6AQ</li>
      </ul>
  </div>

  <div class="flex flex-col studio-container">
    <div class="ml-auto">
      <iframe width="350" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=G61%203DF&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
    <ul class="text-right text-gray-300 mt-3">
      <li>Allander Leisure Centre</li>
      <li>Milngavie Rd</li>
      <li>Milngavie, Glasgow</li>
      <li>G61 3DF</li>
    </ul>
  </div>
</div>

</div>

@endsection
