@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/urbaniks-stage.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl lg:text-5xl text-center mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Notice Board</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">Keep up to date with us</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-2xl lg:text-3xl text-white uppercase tracking-wide text-center mt-16 mb-8">Registration Is Easy </h2>
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


    @include('layouts.errors')
    @include('layouts.status')
    @include('layouts.error-status')

  <div class="w-10/12 mx-auto text-white text-xl">
  <p class="pl-4 mb-4 font-bold tracking-wider">ONLINE REGISTRATION FORM</p>
  </div>

  <form method="POST" action="/registration">
  <div class="flex flex-col sm:flex-row py-8 rounded border-b border-t border-gray-600 sm:w-10/12 mx-auto">
    <div class="flex flex-col sm:w-1/3 px-8">
      <p class="mb-4 text-white text-xl tracking-wide">
        PUPIL DETAILS
      </p>
      <p class="text-lightblue-300 font-semibold text-sm bg-black p-4 rounded">
        If you are under the age of 13 you need a guardian to help you register.
        </p>
      </div>
      <div class="flex flex-col w-2/3 mx-auto mt-8 sm:mt-0 mb-4 sm:mb-0 sm:mx-0 sm:pl-24">
        <div class="flex flex-wrap mb-4">
          <div>
            <legend for="pupil_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Pupil Name*</legend>
            <input id="pupil_name" name="pupil_name" value="{{ old('pupil_name') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="Name" required>
          </div>
          <div class="sm:ml-6 mt-4 sm:mt-0">
            <legend for="pupil_age" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Pupil Age*</legend>
            <input id="pupil_age" name="pupil_age" value="{{ old('pupil_age') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="Age" required>
          </div>
        </div>
        <div class="flex mb-4">
          <div>
            <legend for="guardian_name" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Guardian Name</legend>
            <input id="guardian_name" name="guardian_name" value="{{ old('guardian_name') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="Guardian Name">
          </div>
        </div>
        <div class="mb-4">
          <div class="form-group">
            <legend for="class" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">I want to register to class*</legend>
            <select id="class" name="class" value="{{ old('class') }}" class="bg-gray-100 pl-2 h-8 border border-gray-300 rounded">

                      <optgroup label="kids">
                        <option value="BOOGIE_BABEZ">BOOGIE BABEZ</option>
                        <option value="KOOL_KIDZ">KOOL KIDZ</option>
                        <option value="WEE_SKILLZ">WEE SKILLZ</option>
                      </optgroup>

                      <optgroup label="juniors">
                        <option value="JNR_CONTEMPORARY">JNR CONTEMPORARY</option>
                        <option value="JNR_BOYZ">JNR BOYZ</option>
                        <option value="JNR_GIRLS">JNR GIRLS</option>
                        <option value="BIGGIE_SMALLZ">BIGGIE SMALLZ</option>
                        <option value="BEGINNERS_TAP">BEGINNERS TAP</option>
                      </optgroup>

                      <optgroup label="senior">
                        <option value="GIRLS_YOUTH_CREW">GIRLS YOUTH CREW (GYC)</option>
                        <option value="LAYDEEZ">LAYDEEZ</option>
                        <option value="BALLET_BARRE_PRIVATES">BALLET BARRE PRIVATES</option>
                        <option value="SNR_CREATIVE">SNR CREATIVE</option>
                        <option value="SNR_BOYS_STREET_SKILLZ">SNR BOYS STREET</option>
                      </optgroup>

                      <optgroup label="competitive training">
                        <option value="COMPETITION_TEAM_DANCERS">COMPETITION TEAM DANCERS</option>
                        <option value="HOODLUMZ_CHOREO">HOODLUMZ CHOREO</option>
                        <option value="COMPETITIVE_TRAINING">COMPETITIVE TRAINING</option>
                      </optgroup>
              <option value="I'm not sure">I'm not sure</option>
            </select>
          </div> <!---->
        </div>
      </div>
    </div>

    <div class="flex flex-col sm:flex-row pb-4 rounded sm:w-10/12 mx-auto mb-24 pt-8">
      @csrf
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
              <legend for="phone" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Contact Number*</legend>
              <input id="phone" name="phone_number" value="{{ old('phone_number') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="07..." required>
            </div>
            <div class="sm:ml-6 mt-4 sm:mt-0">
              <legend for="contact_time" class="text-sm font-semibold mb-2 uppercase text-gray-200 tracking-wide">Preferred Contact Time</legend>
              <input id="contact_time" name="contact_time" value="{{ old('contact_time') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="eg. After 6pm">
            </div>
            <div class="flex flex-col mb-3 mt-4">
              <label class="mb-1 pl-1 text-white" for="email">Email*</label>
              <input id="email" name="email" value="{{ old('email') }}" class="bg-gray-100 pl-2 py-4 h-6 border border-gray-300 rounded" placeholder="Email Address" required>
            </div>
            <div class="flex flex-col items-stretch w-full mb-3 relative mt-4">
              <label class="mb-1 pl-1 text-white" for="message">Additional Message</label>
              <textarea rows="4" cols="50" name="message" value="{{ old('message') }}" class="bg-gray-100 sm:w-2/3 leading-normal border border-gray-300 rounded p-3 relative focus:border-blue focus:shadow" placeholder="Want to leave an additional message? [optional]..."></textarea>
            </div>
          </div>
          @captcha
            <button type="submit" class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg sm:mr-auto">register now</button>
        </div>
      </div>
    </form>

@endsection
