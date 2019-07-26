@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div id="hero-image" class="bg-cover bg-center" style="background-image: url('/img/hero-images/merch-test.jpg'); max-width: 100%; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-3xl sm:text-2xl lg:text-5xl sm:w-3/4 text-center sm:w-full mx-auto  px-2" style="background-color: rgba(0,0,0,0.4);">Our Merchandise</h1>
          <p class="hidden sm:flex text-center italic text-2xl mx-auto px-2 mt-4" style="background-color: rgba(49,49,67,0.4);">Look fresh in the latest urbaniks gear</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-2xl text-white uppercase tracking-wide text-center mt-16 mb-8">New Styles for <span class="currentYear"></span>!  </h2>
    <p class="text-center text-gray-300 w-4/6 mx-auto text-lg mb-4">
      To purchase, download and fill an order form for your selected items...
    </p>

  </div>

  <div class="flex flex-col w-11/12 sm:w-10/12 mx-auto mt-16 mb-24">

    <div class="shop-item flex flex-wrap w-full">
      <div class="item-image  sm:w-1/3">
        <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
      </div>
      <div class="item-details sm:w-2/3">
        <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-2xl uppercase text-white">Urbaniks T Shirt</h4>
              <p class="mt-8 text-gray-300">XS - XXL</p>
              <p class="mt-2 text-gray-300">Black, Green, Blue and Red</p>
              <p class="w-3/4 mt-2 text-gray-200 italic">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4 mt-6 sm:mt-0">
            <a href="/order-form?form=urbaniks-t-shirt-order-form" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex flex-wrap w-full mt-12">
      <div class="item-image  sm:w-1/3">
        <img src="/img/varsity-zip-hoodie.jpg" alt="urbaniks t-shirt" class="w-full" >
      </div>
      <div class="item-details sm:w-2/3">
        <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-2xl uppercase text-white">Urbaniks Varsity Hoodie</h4>
              <p class="mt-8 text-gray-300">XS - XXL</p>
              <p class="mt-2 text-gray-300">Black, Green, Blue and Red</p>
              <p class="w-3/4 mt-2 text-gray-200 italic">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4 mt-6 sm:mt-0">
            <a href="/order-form?form=urbaniks-varsity-hoodie-order-form" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex flex-wrap w-full mt-12">
      <div class="item-image  sm:w-1/3">
        <img src="/img/hoodie.jpg" alt="urbaniks t-shirt" class="w-full" >
      </div>
      <div class="item-details sm:w-2/3">
        <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-2xl uppercase text-white">Urbaniks Hoodie</h4>
              <p class="mt-8 text-gray-300">XS - XXL</p>
              <p class="mt-2 text-gray-300">Black, Green, Blue and Red</p>
              <p class="w-3/4 mt-2 text-gray-200 italic">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4 mt-6 sm:mt-0">
            <a href="/order-form?form=urbaniks-hoodie-order-form" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex flex-wrap w-full mt-12">
      <div class="item-image  sm:w-1/3">
        <img src="/img/sweatpants.jpg" alt="urbaniks sweatpants" class="w-full" >
      </div>
      <div class="item-details sm:w-2/3">
        <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-2xl uppercase text-white">Urbaniks Sweatpants</h4>
              <p class="mt-8 text-gray-300">XS - XXL</p>
              <p class="mt-2 text-gray-300">Black, Green, Blue and Red</p>
              <p class="w-3/4 mt-2 text-gray-200 italic">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4 mt-6 sm:mt-0">
            <a href="/order-form?form=urbaniks-sweatpants-order-form" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex flex-wrap w-full mt-12">
      <div class="item-image  sm:w-1/3">
        <img src="/img/leggings.jpg" alt="urbaniks t-shirt" class="w-full" >
      </div>
      <div class="item-details sm:w-2/3">
        <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-2xl uppercase text-white">Urbaniks Leggings</h4>
              <p class="mt-8 text-gray-300">XS - XXL</p>
              <p class="mt-2 text-gray-300">Black, Green, Blue and Red</p>
              <p class="w-3/4 mt-2 text-gray-200 italic">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4 mt-6 sm:mt-0">
            <a href="/order-form?form=urbaniks-leggings-order-form" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

  <div class="shop-item flex flex-wrap w-full mt-12">
    <div class="item-image  sm:w-1/3">
      <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
    </div>
    <div class="item-details sm:w-2/3">
      <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
        <div class="flex flex-col">
            <h4 class="text-2xl uppercase text-white">Urbaniks Target Jumper</h4>
            <p class="text-gray-300 mt-8">XS - XXL</p>
            <p class="text-gray-300 mt-2">Black, Green, Blue and Red</p>
            <p class="text-gray-200 italic w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
        </div>
        <div class="mb-4 mt-6 sm:mt-0">
          <a href="/order-form?form=urbaniks-target-jumper-order-form" class="mt-auto? mb-4?">
            <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="shop-item flex flex-wrap w-full mt-12">
    <div class="item-image  sm:w-1/3">
      <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
    </div>
    <div class="item-details sm:w-2/3">
      <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
        <div class="flex flex-col">
            <h4 class="text-2xl uppercase text-white">Urbaniks Jackets</h4>
            <p class="text-gray-300 mt-8">XS - XXL</p>
            <p class="text-gray-300 mt-2">Black, Green, Blue and Red</p>
            <p class="text-gray-200 italic w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
        </div>
        <div class="mb-4 mt-6 sm:mt-0">
          <a href="/order-form?form=urbaniks-jacket-order-form" class="mt-auto? mb-4?">
            <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="shop-item flex flex-wrap w-full mt-12">
    <div class="item-image  sm:w-1/3">
      <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
    </div>
    <div class="item-details sm:w-2/3">
      <div class="sm:w-2/3 flex flex-col ml-auto h-full justify-between">
        <div class="flex flex-col">
            <h4 class="text-2xl uppercase text-white">Urbaniks Varsity Zip Hoodie</h4>
            <p class="text-gray-300 mt-8">XS - XXL</p>
            <p class="text-gray-300 mt-2">Black, Green, Blue and Red</p>
            <p class="text-gray-200 italic w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
        </div>
        <div class="mb-4 mt-6 sm:mt-0">
          <a href="/order-form?form=urbaniks-varsity-zip-order-form" class="mt-auto? mb-4?">
            <button class="py-2 px-4 bg-lightblue-300 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  </div>

@endsection
