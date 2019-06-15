@if (session('status'))
  <div id="sticky-error-message" class="fixed z-50 bottom-0 right-0 w-1/2 sm:w-1/3 lg:w-1/5 px-3 py-3 mb-4 border rounded text-green-800 border-green-700 bg-green-200" role="alert">
    <p class="md:pl-5 text-green-800">{{session('status')}}</p>
      <button type="button" onclick="closeDiv('sticky-error-message')" class="z-50 absolute bottom-0 right-0 px-4 py-3" data-dismiss="px-3 py-3 mb-4 border rounded" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif
