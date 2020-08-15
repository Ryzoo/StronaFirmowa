@extends('layouts.default')

@section('meta-title') Oferta @endsection
@section('meta-description') Tutaj opis @endsection

@section('header')
    @include('partials.header.offer')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="offer-container">
                    <h3 class="mt-5">Proste strony internetowe</h3>
                    <small class="text-muted w-100">
                        Każda strona internetowa jest ulokowana na <strong>naszym hostingu</strong>. <br/>
                        Dla każdej strony oferujemy również zabezpieczenie w postaci <strong>certyfikatu SSL</strong>, który potwierdzi <strong>bezpieczeństwo</strong> dla przebywających na Twojej stronie.
                    </small>
                    <hr class="w-100"/>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">od 800zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Strona - Wizytówka
                        </h4>
                        <ul>
                            <li>Podstrony: <small><b>Strona główna, Kontakt, O firmie / O nas</b></small></li>
                            <li>Mapa - <b>Google Maps</b></li>
                            <li>Formularz kontaktowy</li>
                            <li>Certyfikat <b>SSL</b></li>
                            <li>Dodatkowe podstrony: <b>0</b></li>
                            <li>Ilość języków: <b>1</b></li>
                            <li>Domena na okres: <b>12 miesięcy</b></li>
                            <li>Hosting na okres: <b>12 miesięcy</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">od 1200zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Strona - Standard
                        </h4>
                        <ul>
                            <li>Podstrony: <small><b>Strona główna, Kontakt, O firmie / O nas, Galeria</b></small></li>
                            <li>Mapa - <b>Google Maps</b></li>
                            <li>Formularz kontaktowy</li>
                            <li>Certyfikat <b>SSL</b></li>
                            <li>Dodatkowe podstrony: <b>1</b></li>
                            <li>Ilość języków: <b>1</b></li>
                            <li>Domena na okres: <b>12 miesięcy</b></li>
                            <li>Hosting na okres: <b>24 miesięcy</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">od 1800zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Strona - Business
                        </h4>
                        <ul>
                            <li>Podstrony: <small><b>Strona główna, Kontakt, O firmie / O nas, Galeria, Oferta</b></small></li>
                            <li>Mapa - <b>Google Maps</b></li>
                            <li>Formularz kontaktowy</li>
                            <li>Certyfikat <b>SSL</b></li>
                            <li>Dodatkowe podstrony: <b>1</b></li>
                            <li>Ilość języków: <b>2</b></li>
                            <li>Domena na okres: <b>24 miesięcy</b></li>
                            <li>Hosting na okres: <b>24 miesięcy</b></li>
                        </ul>
                    </div>
                </section>
                <section class="offer-container">
                    <h3 class="mt-5">Pakiety dla firm, startupów</h3>
                    <small class="text-muted w-100">
                        Pakiety te przystosowane są dla firm i startupów, które w ramach strony
                        internetowej potrzebuja również dodatkowych usług takich jak
                        <strong>konta mailowe</strong>, <strong>wizytówkę google</strong>, <strong>czy podłączenie usług typu Facebook, Google Analytics, Google Ads</strong>
                        <br/>
                        <br/>
                        <strong>Pakiety te łączone są ze stronami z oferty wyżej. </strong><br/>
                    </small>
                    <hr class="w-100"/>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 300zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pakiet - Podstawa
                        </h4>
                        <ul>
                            <li>Skrzynki pocztowe: <b>1</b></li>
                            <li>Polubienia, baner Facebook: <b>tak</b></li>
                            <li>Wizytówka google: <b>nie</b></li>
                            <li>Optymializacja Google Speed: <b>nie</b></li>
                            <li>Google Analytics: <b>nie</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 600zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pakiet - Startup
                        </h4>
                        <ul>
                            <li>Skrzynki pocztowe: <b>3</b></li>
                            <li>Polubienia, baner Facebook: <b>tak</b></li>
                            <li>Wizytówka google: <b>tak</b></li>
                            <li>Optymializacja Google Speed: <b>tak</b></li>
                            <li>Google Analytics: <b>nie</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 1100zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pakiet - Business
                        </h4>
                        <ul>
                            <li>Skrzynki pocztowe: <b>10</b></li>
                            <li>Polubienia, baner Facebook: <b>tak</b></li>
                            <li>Wizytówka google: <b>tak</b></li>
                            <li>Optymializacja Google Speed: <b>tak</b></li>
                            <li>Google Analytics: <b>tak</b></li>
                        </ul>
                    </div>
                </section>
                <section class="offer-container mb-5">
                    <h3 class="mt-5">Pozycjonowanie, SEO, reklama</h3>
                    <small class="text-muted w-100">
                        Elelemnty bez których ciężko zaistnieć w internecie. <br/>
                        Oferujemy pełna pomoc w procesie rozpowszechcniania informacji o firmie. <br/>
                        Od <strogn>stworzenia strony na Facebooku</strogn> po <strong>pozycjonowanie na konkretne słowa</strong> kluczowe oraz <strong>reklamy w Google</strong>.
                    </small>
                    <hr class="w-100"/>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 200zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pozycjonowanie - Podstawa
                        </h4>
                        <ul>
                            <li>Analiza i rozpoznanie słów kluczowych: <b>tak</b></li>
                            <li>Optymalizacja podstron pod słowa kluczowe: <b>tak</b></li>
                            <li>Strona na portalu Facebook: <b>tak</b></li>
                            <li>Wizytówka Google: <b>nie</b></li>
                            <li>Kampania reklamowa Facebook: <b>nie</b></li>
                            <li>Google Analitics: <b>nie</b></li>
                            <li>Kampania Google Ads: <b>nie</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 600zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pakiet - Startup
                        </h4>
                        <ul>
                            <li>Analiza i rozpoznanie słów kluczowych: <b>tak</b></li>
                            <li>Optymalizacja podstron pod słowa kluczowe: <b>tak</b></li>
                            <li>Strona na portalu Facebook: <b>tak</b></li>
                            <li>Wizytówka Google: <b>nie</b></li>
                            <li>Kampania reklamowa Facebook: <b>tak - miesiąc</b></li>
                            <li>Google Analitics: <b>nie</b></li>
                            <li>Kampania Google Ads: <b>nie</b></li>
                        </ul>
                    </div>
                    <div class="offer-element">
                        <div class="offer-icon">
                            <i class="fas fa-cogs"></i>
                            <span class="badge bg-primary">+ 1000zł netto</span>
                        </div>
                        <h4 class="offer-title">
                            Pakiet - Business
                        </h4>
                        <ul>
                            <li>Analiza i rozpoznanie słów kluczowych: <b>tak</b></li>
                            <li>Optymalizacja podstron pod słowa kluczowe: <b>tak</b></li>
                            <li>Strona na portalu Facebook: <b>tak</b></li>
                            <li>Wizytówka Google: <b>tak</b></li>
                            <li>Kampania reklamowa Facebook: <b>tak - miesiąc</b></li>
                            <li>Google Analitics: <b>tak</b></li>
                            <li>Kampania Google Ads: <b>tak - miesiąc</b></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
