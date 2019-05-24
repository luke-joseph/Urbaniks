@extends('layouts.master')
@section('content')
  <div class="px-3">
    <div class="bg-cover" style="background-image: url('/img/merch-test.png'); max-width: 100%; height: 500px; width: 100%;">
      <div class="flex flex-col h-full">
        <div class="m-auto text-white uppercase flex flex-col">
          <h1 class="text-4xl px-2 text-center mb-4" style="background-color: rgba(239,12,91,0.4);">Our Merchandise</h1>
          <p class="text-center italic text-2xl mx-auto px-2" style="background-color: rgba(49,49,67,0.4);">Look fresh in the latest urbaniks gear</p>
        </div>
      </div>
   </div>
  </div>

  <div class="flex flex-col">
    <h2 class="text-3xl text-white uppercase tracking-wide text-center mt-16 mb-8">New Styles for <span class="currentYear"></span>!  </h2>
    <p class="text-center text-white w-4/6 mx-auto text-lg mb-4">
      To purchase, download and fill an order form for your selected items...
    </p>

  </div>

  <div class="flex flex-col w-10/12 mx-auto mt-16 mb-24">

    <div class="shop-item flex w-full">
      <div class="item-image border? w-1/3">
        <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
      </div>
      <div class="item-details border? w-2/3">
        <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-white text-2xl uppercase">Urbaniks super fresh T Shirt</h4>
              <p class="text-white mt-8">XS - XXL</p>
              <p class="text-white mt-2">Black, Green, Blue and Red</p>
              <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4">
            <a href="/register" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex w-full mt-12">
      <div class="item-image border? w-1/3">
        <img src="/img/varsity-zip-hoodie.jpg" alt="urbaniks t-shirt" class="w-full" style="height: 294px;">
      </div>
      <div class="item-details border? w-2/3">
        <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-white text-2xl uppercase">Urbaniks Varsity Shirt</h4>
              <p class="text-white mt-8">XS - XXL</p>
              <p class="text-white mt-2">Black, Green, Blue and Red</p>
              <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4">
            <a href="/register" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex w-full mt-12">
      <div class="item-image border? w-1/3">
        <img src="/img/hoodie.jpg" alt="urbaniks t-shirt" class="w-full" style="height: 294px;">
      </div>
      <div class="item-details border? w-2/3">
        <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-white text-2xl uppercase">Urbaniks Hoodie</h4>
              <p class="text-white mt-8">XS - XXL</p>
              <p class="text-white mt-2">Black, Green, Blue and Red</p>
              <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4">
            <a href="/register" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex w-full mt-12">
      <div class="item-image border? w-1/3">
        <img src="/img/sweatpants.jpg" alt="urbaniks t-shirt" class="w-full" style="height: 294px;">
      </div>
      <div class="item-details border? w-2/3">
        <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-white text-2xl uppercase">Urbaniks Sweatpants</h4>
              <p class="text-white mt-8">XS - XXL</p>
              <p class="text-white mt-2">Black, Green, Blue and Red</p>
              <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4">
            <a href="/register" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="shop-item flex w-full mt-12">
      <div class="item-image border? w-1/3">
        <img src="/img/leggings.jpg" alt="urbaniks t-shirt" class="w-full" style="height: 294px;">
      </div>
      <div class="item-details border? w-2/3">
        <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
          <div class="flex flex-col">
              <h4 class="text-white text-2xl uppercase">Urbaniks Leggings</h4>
              <p class="text-white mt-8">XS - XXL</p>
              <p class="text-white mt-2">Black, Green, Blue and Red</p>
              <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
          </div>
          <div class="mb-4">
            <a href="/register" class="mt-auto? mb-4?">
              <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
            </a>
          </div>
        </div>
      </div>
    </div>

  <div class="shop-item flex w-full mt-12">
    <div class="item-image border? w-1/3">
      <img src="/img/test-tshirt.jpg" alt="urbaniks t-shirt" class="w-full">
    </div>
    <div class="item-details border? w-2/3">
      <div class="w-2/3 flex flex-col ml-auto h-full justify-between">
        <div class="flex flex-col">
            <h4 class="text-white text-2xl uppercase">Urbaniks Target Shirt</h4>
            <p class="text-white mt-8">XS - XXL</p>
            <p class="text-white mt-2">Black, Green, Blue and Red</p>
            <p class="text-white w-3/4 mt-2">Look fresh all seasons with the official urbaniks t shirt</p>
        </div>
        <div class="mb-4">
          <a href="/register" class="mt-auto? mb-4?">
            <button class="py-2 px-4 bg-indigo-400 rounded-lg text-black uppercase font-bold tracking-wide shadow-lg mx-auto" type="button">Download Order Form</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  </div>

@endsection
