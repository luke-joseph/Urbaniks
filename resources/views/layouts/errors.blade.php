@if(count($errors))
<div class="flex justify-content-center">
  <div class=" mb-2 mx-auto">
    <div class="mb-0 rounded-lg">

      <ul class="pl-0 py-2 bg-red-100 rounded">
        @foreach ($errors->all() as $error)

        <li class="flex mx-4 p-2 list-reset my-1 error text-red-800 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 icon-important"><path class="primary-error" d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20z"/><path class="secondary-error" d="M12 18a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm1-5.9c-.13 1.2-1.88 1.2-2 0l-.5-5a1 1 0 0 1 1-1.1h1a1 1 0 0 1 1 1.1l-.5 5z"/></svg>
          <p class="ml-2 text-sm">{{ $error }}</p>
        </li>

        @endforeach
      </ul>

    </div>
  </div>
</div>

@endif
