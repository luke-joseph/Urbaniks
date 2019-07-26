<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Choose from a range of street dance & modern dance lessons. Call Urbaniks Street Skool of Dance in Milngavie, Dunbartonshire on 07780 992 295">
        <title>{{$pageMeta['page_title']}}</title>
        {{-- SOCIAL --}}
        <meta property="og:image" content="{{$pageMeta['fb_image']}}" />
        <meta property="og:site_name" content="trackwire" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{$pageMeta['fb_url']}}" />
        <meta property="og:title" content="{{$pageMeta['fb_title']}}" />
        <meta property="og:description" content="{{$pageMeta['fb_description']}}" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$pageMeta['twitter_title']}}" />
        <meta name="twitter:description" content="{{$pageMeta['twitter_description']}}" />
        <meta name="twitter:image" content="{{$pageMeta['twitter_image']}}" />

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    </head>
    <body class="bg-gray-1000">
    <div id="focus-area" class="flex xl:w-6/7 mx-auto bg-gray-1000 min-h-screen" style="max-width: 1500px;">

      <div class="h-full bg-gray-1000 m-auto">
        <img src="/img/urbaniks-plain-ws.png" alt="urbaniks logo" class="px-8">
        <p class="text-white text-5xl uppercase text-center font-bold mt-8">
          coming soon
        </p>
      </div>


</div>{{-- end focus area --}}
<script type="text/javascript">

  let mobileNav = document.getElementById('mobile-nav');
  let phoneModal = document.getElementById('phone-modal');

  function toggleNav(){
    mobileNav.classList.toggle('hidden');
  }

  function togglePhoneModal(e){
    if (e.target.id == 'phone-modal' || e.target.id == 'close-target' || e.target.id == 'phone-social') {
      phoneModal.classList.toggle('hidden');
    }
  }

  function showPhoneModal() {
    phoneModal.classList.toggle('hidden');
  }

  function addColorToPageNav(page){
      let el = document.getElementsByClassName(page);
      for (var i = 0; i < el.length; i++) {
        el[i].classList.remove('text-gray-100');
        el[i].classList.add('text-lightblue-200');
      }
  }

  let page = @json($page);
  addColorToPageNav(page);

// set date
var d = new Date();
var n = d.getFullYear();

document.querySelector('.currentYear').innerHTML = n;

function closeDiv(id){
  let el = document.getElementById(id);
  el.style.display = "none";
}
</script>

<script src="{{ mix('js/app.js') }}" type="text/javascript" charset="utf-8"></script>
</body>
</html>
