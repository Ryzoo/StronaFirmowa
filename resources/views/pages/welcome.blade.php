@extends('layouts.default')

@section('meta-title') Profesjonalne strony, platformy, aplikacje @endsection
@section('meta-img') {{asset('images/default.webp')}} @endsection
@section('meta-description')
    Nie tylko przygotujemy Twoją firmę na wejście do sieci. Chętnie podzielimy się doświadczeniem i pokażemy jak radzą sobie z podobnymi problemami inne firmy.
    Dla nas klient to partner biznesowy i dlatego jesteśmy dla Ciebie dostępni przez większość czasu, aby wspomóc Twój rozwój jak tylko potrafimy.
@endsection

@section('header')
    @include('partials.header.home')
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-3 text-left my-auto">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow bounceInLeft">
                            <div class="feature-element">
                                <i class="fas fa-globe"></i>
                                <h4>Strony, aplikacje, platformy</h4>
                                <p>Mamy duże doświadczenie nie tylko w budowaniu prostych stron, ale i w tworzeniu zaawansowanych platform internetowych.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow bounceInLeft">
                            <div class="feature-element">
                                <i class="fas fa-pencil-ruler"></i>
                                <h4>Design, logotypy</h4>
                                <p>Nie posiadasz jeszcze loga swojej firmy? Z chęcią stworzymy wszystko dla Ciebie.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center my-auto">
                    <img class="programmer-img p-5 wow bounceInUp" src="{{asset('images/programmer.svg')}}" alt="css, html, js, php, react, vue, c#, .net">
                </div>
                <div class="col-lg-3 text-right my-auto">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 wow bounceInRight">
                            <div class="feature-element">
                                <i class="fas fa-cog"></i>
                                <h4>SEO i optymalizacja pod wyszukiwarki</h4>
                                <p>Stworzenie pięknej wizualnie strony to nie wszystko. Zadbamy o to, aby Twoja strona była odpowiednio widoczna w sieci.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 wow bounceInRight">
                            <div class="feature-element">
                                <i class="fas fa-ad"></i>
                                <h4>Kampanie reklamowe</h4>
                                <p>Chętnie pomożemy przeprowadzić kampanię reklamową na portalu Facebook lub Google.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-gray">
            <div class="container">
                <div class="row d-flex py-5">
                    <div class="col-lg-6 text-left my-auto wow bounceInLeft">
                        <h2>Jesteśmy wsparciem dla Twojego biznesu.</h2>
                        <p>
                            Nie tylko przygotujemy <strong>Twoją firmę na wejście do sieci</strong>. Chętnie <strong>podzielimy się doświadczeniem </strong>i pokażemy jak <b>radzą sobie</b> z podobnymi problemami <b>inne firmy</b>.<br/><br/>
                            Dla nas klient to <strong>partner biznesowy</strong> i dlatego jesteśmy dla Ciebie dostępni przez większość czasu, aby <b>wspomóc Twój rozwój</b> jak tylko potrafimy.
                        </p>
                    </div>
                    <div class="col-lg-6 text-right my-auto wow bounceInRight">
                        <img class="programmer-img p-5" src="{{asset('images/help.svg')}}" alt="css, html, js, php, react, vue, c#, .net">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-6 text-right my-auto wow bounceInLeft">
                    <img class="programmer-img p-5" src="{{asset('images/other.svg')}}" alt="css, html, js, php, react, vue, c#, .net">
                </div>
                <div class="col-lg-6 text-left my-auto wow bounceInRight">
                    <h2>Nasza oferta to nie tylko <b>strony internetowe</b></h2>
                    <p><b>W naszej ofercie znajdziesz kompleksowe usługi, które znakomicie się uzupełniają:</b></p>
                    <ul>
                        <li>Platformy internetowe</li>
                        <li>Prywatne rozwiązania dla firm w sieci</li>
                        <li>Aplikacje internetowe</li>
                        <li>Strony wizytówkowe, blogi, fora</li>
                        <li>Kampanie reklamowe Facebook, Google Ads</li>
                        <li>Wizytówki google</li>
                        <li>Logotypy dla Twojej firmy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
