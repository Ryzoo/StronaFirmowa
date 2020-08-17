<nav class="navbar fixed-top navbar-expand-lg navbar-dark background-gradient p-0">
  <div class="container">
    <a class="navbar-brand" href="{{route('main')}}">
      <img src="{{asset('images/logo.svg')}}" alt="Strony internetowe Wadowice">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() == 'main' ? 'active' : '' }}" aria-current="page" href="{{route('main')}}">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() == 'offer' ? 'active' : '' }}" aria-current="page" href="{{route('offer')}}">Oferta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() == 'realization' ? 'active' : '' }}" aria-current="page" href="{{route('realization')}}">Realizacje</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() == 'contact' ? 'active' : '' }}" aria-current="page" href="{{route('contact')}}">Kontakt</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::current()->getName() == 'blog' ? 'active' : '' }}" aria-current="page" href="{{route('blog')}}">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  window.onload = function() {
    const headerHeight = parseInt(document.getElementsByClassName('header-content')[0].offsetHeight)
    document.getElementsByClassName('theme-background-img')[0].style.height = headerHeight + 'px'

    window.addEventListener('scroll', function(e) {
      const scroll = window.scrollY;

      if(scroll !== 0){
        document.getElementsByClassName('navbar')[0].classList.add('scrolled')
      }else{
        document.getElementsByClassName('navbar')[0].classList.remove('scrolled')
      }
    });

    window.addEventListener('resize', function(e) {
      const headerHeight = parseInt(document.getElementsByClassName('header-content')[0].offsetHeight)
      document.getElementsByClassName('theme-background-img')[0].style.height = headerHeight + 'px'
    });
  };
</script>