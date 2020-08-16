<div class="container mt-5">
  <div class="row">
    <div class="col-sm-12 mb-4">
      <h5>Strony internetowe dla Twojej firmy</h5>
      <p class="description text-muted">
        Dostarczamy profesjonalne <strong>strony internetowe, aplikacje, platformy</strong> dla <strong>firm</strong> jak i <strong>osób prywatnych</strong>.
        Zajmujemy się również <strong>kampanią reklamową</strong>, zadbamy o <strong>pozycjonowanie Twojej strony</strong>, pomożemy stworzyć <strong>Twoje logo</strong>.
        Z wielką przyjemnością wprowadzimy Twoją firmę do sieci, <strong>usprawnimy Twoje procesy</strong> poprzez <strong>dedykowane oprogramowanie</strong>, pokażemy jak za pomocą internetu rozwiązać niejeden problem w firmie.
      </p>
    </div>
    <div class="col-md-4">
      <h5>Podstrony</h5>
      <div class="list-group">
        <a href="{{route('main')}}" class="list-group-item list-group-item-action {{ Route::current()->getName() == 'main' ? 'active' : '' }}">Strona główna</a>
        <a href="{{route('offer')}}" class="list-group-item list-group-item-action {{ Route::current()->getName() == 'offer' ? 'active' : '' }}">Oferta</a>
        <a href="{{route('realization')}}" class="list-group-item list-group-item-action {{ Route::current()->getName() == 'realization' ? 'active' : '' }}">Realizacje</a>
        <a href="{{route('contact')}}" class="list-group-item list-group-item-action {{ Route::current()->getName() == 'contact' ? 'active' : '' }}">Kontakt</a>
      </div>
    </div>
  </div>
  <div class="row mb-3 text-muted mt-5">
    <div class="col">
      Copyright 2020 © Created by <a href="//gkastelik.pl">Grzegorz Kastelik</a>
    </div>
    <div class="col d-flex align-items-center">
      <span>Bądź na bieżąco:</span>
      <a href="https://www.facebook.com/StronaFirmowa.online" class="text-white btn btn-primary btn-sm ml-2"><i class="fab fa-facebook-square"></i></a>
{{--      <a href="" class="text-white btn btn-primary btn-sm ml-2"><i class="fab fa-google"></i></a>--}}
    </div>
  </div>
</div>