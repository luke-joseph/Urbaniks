@if (session('status'))
      {{-- <a href="/tracks"> --}}
        <div id="sticky-message" class="w-1/2 sm:w-1/3 lg:w-1/5 px-3 py-3 mb-4 border rounded text-green-darker border-green-dark bg-green-lighter block" role="alert">
          <p class="pt-5 pl-5"> {{ session('status') }}</p>
            <button type="button" onclick="closeDiv()" class="z-50 absolute pin-t pin-b pin-r px-4 py-3" data-dismiss="relative px-3 py-3 mb-4 border rounded" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      {{-- </a> --}}
@endif
