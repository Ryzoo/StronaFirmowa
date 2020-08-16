@extends('layouts.default')

@section('meta-title') Oferta @endsection
@section('meta-description')
    W swojej ofercie przygotowane mamy wiele podstawowych pakietów, które wybierane są najczęściej. Jeśli nie wiesz co wybrać lub nie widzisz oferty odpowiedniej dla siebie, zapraszamy do kontaktu.
@endsection

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
                        Dla każdej strony oferujemy również zabezpieczenie w postaci <strong>certyfikatu SSL</strong>,
                        który potwierdzi <strong>bezpieczeństwo</strong> dla przebywających na Twojej stronie.
                    </small>
                    <hr class="w-100"/>
                    <div class="base-card wow bounceInLeft">
                        <h4 class="offer-title">
                            Strona - Podstawa
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">od 800zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Certyfikat <b>SSL</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Mapa <b>Google Maps</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Formularz kontaktowy
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Podstrony
                                <span class="badge bg-primary rounded-pill">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ilość języków
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Domena na okres
                                <span class="badge bg-primary rounded-pill">12 miesięcy</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Hosting na okres
                                <span class="badge bg-primary rounded-pill">12 miesięcy</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInUp">
                        <h4 class="offer-title">
                            Strona - Standard
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">od 1200zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Certyfikat <b>SSL</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Mapa <b>Google Maps</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Formularz kontaktowy
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Podstrony
                                <span class="badge bg-primary rounded-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ilość języków
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Domena na okres
                                <span class="badge bg-primary rounded-pill">12 miesięcy</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Hosting na okres
                                <span class="badge bg-primary rounded-pill">24 miesięcy</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInRight">
                        <h4 class="offer-title">
                            Strona - Business
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">od 1800zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Certyfikat <b>SSL</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Mapa <b>Google Maps</b>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Formularz kontaktowy
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Podstrony
                                <span class="badge bg-primary rounded-pill">6</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ilość języków
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Domena na okres
                                <span class="badge bg-primary rounded-pill">24 miesięcy</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Hosting na okres
                                <span class="badge bg-primary rounded-pill">24 miesięcy</span>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="offer-container">
                    <h3 class="mt-5">Pakiety dla firm, startupów</h3>
                    <small class="text-muted w-100">
                        Pakiety te przystosowane są dla firm i startupów, które w ramach strony
                        internetowej potrzebuja również dodatkowych usług takich jak
                        <strong>konta mailowe</strong>, <strong>wizytówkę google</strong>, <strong>czy podłączenie usług
                            typu Facebook, Google Analytics, Google Ads</strong>
                        <br/>
                        <br/>
                        <strong>Pakiety te łączone są ze stronami z oferty wyżej. </strong><br/>
                    </small>
                    <hr class="w-100"/>
                    <div class="base-card wow bounceInLeft">
                        <h4 class="offer-title">
                            Pakiet - Podstawa
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 200zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Skrzynki pocztowe
                                <span class="badge bg-primary rounded-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Polubienia, baner Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka google
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymializacja Google Speed
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analytics
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInUp">
                        <h4 class="offer-title">
                            Pakiet - Startup
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 500zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Skrzynki pocztowe
                                <span class="badge bg-primary rounded-pill">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Polubienia, baner Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka google
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymializacja Google Speed
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analytics
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInRight">
                        <h4 class="offer-title">
                            Pakiet - Business
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 800zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Skrzynki pocztowe
                                <span class="badge bg-primary rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Polubienia, baner Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka google
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymializacja Google Speed
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analytics
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="offer-container mb-5">
                    <h3 class="mt-5">Pozycjonowanie, SEO, reklama</h3>
                    <small class="text-muted w-100">
                        Elementy, bez których ciężko zaistnieć w internecie. <br/>
                        Oferujemy pełna pomoc w procesie rozpowszechniania informacji o firmie. <br/>
                        Od
                        <strogn>stworzenia strony na Facebooku</strogn>
                        po <strong>pozycjonowanie na konkretne słowa</strong> kluczowe oraz <strong>reklamy w
                            Google</strong>.
                    </small>
                    <hr class="w-100"/>
                    <div class="base-card wow bounceInLeft">
                        <h4 class="offer-title">
                            Pozycjonowanie - Podstawa
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 300zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Analiza i rozpoznanie słów kluczowych
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymalizacja podstron pod słowa kluczowe
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Strona na portalu Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka Google
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Reklama Facebook
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analitics
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kampania Google Ads
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInUp">
                        <h4 class="offer-title">
                            Pakiet - Startup
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 700zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Analiza i rozpoznanie słów kluczowych
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymalizacja podstron pod słowa kluczowe
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Strona na portalu Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka Google
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Reklama Facebook
                                <span class="badge bg-primary rounded-pill">tak - miesiąc</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analitics
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kampania Google Ads
                                <span class="badge bg-primary rounded-pill">nie</span>
                            </li>
                        </ul>
                    </div>
                    <div class="base-card wow bounceInRight">
                        <h4 class="offer-title">
                            Pakiet - Business
                        </h4>
                        <div class="offer-icon">
                            <span class="badge bg-primary">+ 1000zł netto</span>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Analiza i rozpoznanie słów kluczowych
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Optymalizacja podstron pod słowa kluczowe
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Strona na portalu Facebook
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Wizytówka Google
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Reklama Facebook
                                <span class="badge bg-primary rounded-pill">tak - miesiąc</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Google Analitics
                                <span class="badge bg-primary rounded-pill">tak</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Kampania Google Ads
                                <span class="badge bg-primary rounded-pill">tak - miesiąc</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
