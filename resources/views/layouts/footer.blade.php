<div class="h-6 bg-gray-900 w-full">

</div>
<div id="footer-section" class="bg-black flex">

 <div class="flex flex-wrap w-11/12 mx-auto mt-16 mb-16">
    <div class="w-full md:w-1/4 mb-8 md:mb-0 pr-4">
      <div class="">
        <img src="/img/urbaniks-plain-ws.png" alt="urbaniks street dance logo white" class="w-1/3 md:w-1/2">
      </div>
      <ul class="mt-4 text-white">
        <li class="text-gray-400 border-b border-gray-400 py-2"><a href="/privacy-policy">> Privacy</a></li>
        <li class="text-gray-400 border-b border-gray-400 py-2"><a href="/cookie-policy">> Cookies</a></li>
        <li class="text-gray-400 border-b border-gray-400 py-2"><a href="/terms">> Terms & Conditions</a></li>
      </ul>
    </div>
    <div class="px-2 border? border-white? md:w-1/4 mb-8 md:mb-0">
        <h4 class="text-lightblue-300 uppercase text-base font-bold tracking-wider">Contact</h4>
        <ul>
          <li class="text-gray-400 mt-4">Urbaniks</li>
          <li class="text-gray-400 mt-4">07780 992 295</li>
          <li class="text-gray-400 mt-4">info@urbaniks.co.uk</li>
        </ul>
    </div>
    <div class="px-2 border? border-white? md:w-1/4 mb-8 md:mb-0">
      <h4 class="text-lightblue-300 uppercase text-base font-bold tracking-wider">Studio Locations</h4>
      <ul>
        <li class="text-gray-400 mt-4">Milngavie - West Rugby Club, Glasgow Rd. G62 6AQ</li>
        <li class="text-gray-400 mt-4">Balloch - The Lennox Hall, Main St. Jamestown, G83 8AZ</li>
        <li class="text-gray-400 mt-4">Milngavie - Allander Leisure Centre, Milngavie RD. G61 3DF</li>
      </ul>
    </div>
    <div class="px-2 border? border-white? md:w-1/4">
      <h4 class="text-lightblue-300 uppercase text-base font-bold tracking-wider">Opening Hours</h4>
      <ul>
        <li class="text-gray-400 mt-4">Mon, Tues: 1530 - 2145</li>
        <li class="text-gray-400 mt-4">Thurs, Friday: 1530 - 1830</li>
        <li class="text-gray-400 mt-4">Sat : 0945 - 1530</li>
      </ul>
    </div>
 </div>

</div>
<div class="bg-black flex">
  <p class="text-gray-400 w-11/12 mx-auto text-xs py-1">copyright 2019</p>
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

<script src="/js/app.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>
