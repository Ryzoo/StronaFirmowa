<section class="header-content pb-5">
  <img class="theme-background-img" src="{{asset('images/background.svg')}}" alt="theme background">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-6 d-flex">
        <div class="my-auto text-white wow bounceInLeft mb-5">
          <h1>Zapraszamy do <b>kontaktu</b> z nami</h1>
          <p>
            Z chęcią odpowiedmy na <strong>wszelkie pytania</strong>. Pomożemy z wyborem <b>oferty</b>, nakreślimy dla Ciebie <b>dalsze kroki</b>.
          </p>
          <div class="d-flex pt-3 flex-wrap text-justify justify-content-end mb-5">
            <a class="btn btn-lg btn-light my-2 mr-2" href="{{route('realization')}}">Realizacje</a>
            <a class="btn btn-lg btn-outline-light my-2" href="{{route('offer')}}">Nasza oferta</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 p-5 wow bounceInDown">
        <div class="base-card bg-white" style="width: 100%; max-width: 400px">
          <h2 class="page-slogan"><b>Napisz</b> do nas</h2>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
          <form method="POST" action="{{ route('contact') }}">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Tytuł</label>
              <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

              @error('title')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Twój adres email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Wiadomość</label>
              <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="5" required autocomplete="message">{{ old('message') }}</textarea>

              @error('message')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="g-recaptcha-response-v2">Potwierdź, że nie jesteś robotem</label>
              <input id="g-recaptcha-response-v2" type="hidden" class="form-control @error('g-recaptcha-response') is-invalid @enderror">
              {!! NoCaptcha::display() !!}

              @error('g-recaptcha-response')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group text-right mt-3">
              <button type="submit" class="btn btn-primary text-white">
                Wyślij wiadomość
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
  {!! NoCaptcha::renderJs('pl') !!}
{{--  <script>--}}
{{--    function initMap() {--}}
{{--      const localization = {lat: 49.864844, lng: 19.675952};--}}
{{--      const map = new google.maps.Map(document.getElementById('map'), {--}}
{{--        zoom: 17,--}}
{{--        center: localization,--}}
{{--        gestureHandling: 'cooperative'--}}
{{--      });--}}
{{--      new google.maps.Marker({position: localization, map: map});--}}
{{--    }--}}
{{--  </script>--}}
{{--  <script async defer--}}
{{--          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-RT-2mpOPhxI9B-xYafZqQDfKSHO1dsc&callback=initMap"></script>--}}
@endpush