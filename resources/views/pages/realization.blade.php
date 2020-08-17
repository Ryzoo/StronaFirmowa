@extends('layouts.default')

@section('meta-title') Realizacje @endsection
@section('meta-img') {{asset('images/default.webp')}} @endsection
@section('meta-description')
    Mamy za sobą kilka lat doświadczenia w tworzeniu stron, platform oraz aplikacji.
    W swoim portfolio mamy współpracę z wieloma firmami - zarówno tymi, które dopiero stawiały swoje pierwsze kroki jak i tymi, które już wiele lat są na rynku.
@endsection

@section('header')
    @include('partials.header.work')
@endsection

@section('content')
    <div class="container">
        <div class="row d-flex py-5">
            <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInLeft">
                <div class="card-carousel-container">
                    <div id="carouselSistersCake" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselSistersCake" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="1"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="2"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="3"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="4"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="5"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="6"></li>
                            <li data-target="#carouselSistersCake" data-slide-to="7"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/sistersCake/main.webp')}}"
                                     class="d-block w-100" alt="strona główna sisterscake">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/basket.webp')}}"
                                     class="d-block w-100" alt="koszyk">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/basket_summary.webp')}}"
                                     class="d-block w-100" alt="koszyk podsumowanie">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/login.webp')}}"
                                     class="d-block w-100" alt="logowanie">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/clients.webp')}}"
                                     class="d-block w-100" alt="widok klienta">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/products_admin.webp')}}"
                                     class="d-block w-100" alt="produkt">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/sistersCake/statistic.webp')}}"
                                     class="d-block w-100" alt="statystyki">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselSistersCake" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselSistersCake" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInRight">
                <div class="badge bg-primary">
                    <a class="text-white text-decoration-none" href="https://sisterscake.pl">sisterscake.pl</a>
                </div>
                <h2>Platforma dla firmy<br/><b style="font-size: 45px">Sisters Cake</b></h2>
                <span class="badge rounded-pill bg-secondary">Produkty</span>
                <span class="badge rounded-pill bg-secondary">Sklep internetowy</span>
                <span class="badge rounded-pill bg-secondary">Klienci</span>
                <span class="badge rounded-pill bg-secondary">Statystki</span>
                <span class="badge rounded-pill bg-secondary">Kalendarz zamówień</span>
                <span class="badge rounded-pill bg-secondary">Powiadomienia sms</span>
                <span class="badge rounded-pill bg-secondary">Powiadomienia email</span>
                <span class="badge rounded-pill bg-secondary">Spis wiedzy biznesowej</span>
                <span class="badge rounded-pill bg-secondary">Pozycjonowanie</span>
                <span class="badge rounded-pill bg-secondary">Optymializacja Google Speed</span>
                <span class="badge rounded-pill bg-secondary">Google Ads</span>
                <span class="badge rounded-pill bg-secondary">Google Analytics</span>
                <span class="badge rounded-pill bg-secondary">Strona Facebook</span>
                <span class="badge rounded-pill bg-secondary">Wizytówka Google</span>
                <span class="badge rounded-pill bg-secondary">Kampania reklamowa Facebook</span>
                <span class="badge rounded-pill bg-secondary">Kampania reklamowa Google</span>
            </div>
        </div>
    </div>
    <div class="background-gray">
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInLeft">
                    <div class="badge bg-primary">
                        <a class="text-white text-decoration-none" href="https://go2sport.net">go2sport.net</a>
                    </div>
                    <h2>Platforma dla firmy<br/><b style="font-size: 45px">Go2Sport</b></h2>
                    <span class="badge rounded-pill bg-secondary">Obiekty</span>
                    <span class="badge rounded-pill bg-secondary">Zarządzanie użytownikami</span>
                    <span class="badge rounded-pill bg-secondary">Kalendarz rezerwacji</span>
                    <span class="badge rounded-pill bg-secondary">Raporty systemowe</span>
                    <span class="badge rounded-pill bg-secondary">Statystki</span>
                    <span class="badge rounded-pill bg-secondary">CMS</span>
                    <span class="badge rounded-pill bg-secondary">Blog</span>
                    <span class="badge rounded-pill bg-secondary">Zaawansowane mapy</span>
                    <span class="badge rounded-pill bg-secondary">System rezerwacji</span>
                    <span class="badge rounded-pill bg-secondary">Optymializacja Google Speed</span>
                    <span class="badge rounded-pill bg-secondary">Google Analytics</span>
                </div>
                <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInRight">
                    <div class="card-carousel-container">
                        <div id="carouselGo2sportSite" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselGo2sportSite" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="1"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="2"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="3"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="4"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="5"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="6"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="7"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="8"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="9"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="10"></li>
                                <li data-target="#carouselGo2sportSite" data-slide-to="11"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="{{asset('images/go2sport/main.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/admin.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/blog.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/categories.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/cities.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/emails.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/map.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/object_settings.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/objects.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/raports.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/subpage.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                                <div class="carousel-item"><img src="{{asset('images/go2sport/user_content.webp')}}" class="d-block w-100" alt="strona główna go2sport"></div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselGo2sportSite" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselGo2sportSite" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex py-5">
            <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInLeft">
                <div class="card-carousel-container">
                    <div id="carouselCentrumKlubuSite" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="1"></li>
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="2"></li>
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="3"></li>
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="4"></li>
                            <li data-target="#carouselCentrumKlubuSite" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="{{asset('images/centrumklubu/main.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                            <div class="carousel-item"><img src="{{asset('images/centrumklubu/about.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                            <div class="carousel-item"><img src="{{asset('images/centrumklubu/products.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                            <div class="carousel-item"><img src="{{asset('images/centrumklubu/login.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                            <div class="carousel-item"><img src="{{asset('images/centrumklubu/dashboard.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                            <div class="carousel-item"><img src="{{asset('images/centrumklubu/configurations.webp')}}" class="d-block w-100" alt="strona główna centrum klubu"></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselCentrumKlubuSite" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselCentrumKlubuSite" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 order-lg-0 bounceInRight">
                <div class="badge bg-primary">
                    <a class="text-white text-decoration-none" href="https://centrumklubu.pl/">centrumklubu.pl</a>
                </div>
                <h2>Platforma dla firmy<br/><b style="font-size: 45px">Club Management Center</b></h2>
                <span class="badge rounded-pill bg-secondary">Dostęp do innych apliakcji</span>
                <span class="badge rounded-pill bg-secondary">Zarządzanie użytownikami</span>
                <span class="badge rounded-pill bg-secondary">Licencje</span>
                <span class="badge rounded-pill bg-secondary">Płatności</span>
                <span class="badge rounded-pill bg-secondary">Optymializacja Google Speed</span>
                <span class="badge rounded-pill bg-secondary">Google Analytics</span>
                <span class="badge rounded-pill bg-secondary">Google Ads</span>
                <span class="badge rounded-pill bg-secondary">Strona Facebook</span>
                <span class="badge rounded-pill bg-secondary">Kampania reklamowa Facebook</span>
                <span class="badge rounded-pill bg-secondary">Kampania reklamowa Google</span>
            </div>
        </div>
    </div>
    <div class="background-gray">
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInLeft">
                    <div class="badge bg-primary">
                        <a class="text-white text-decoration-none" href="https://koscielniak.com.pl">koscielniak.com.pl</a>
                    </div>
                    <h2>Strona dla trenera repezentacji Polski<br/><b style="font-size: 45px">Ireneusz Kościelniak</b></h2>
                    <span class="badge rounded-pill bg-secondary">Wizytówka</span>
                    <span class="badge rounded-pill bg-secondary">CMS</span>
                    <span class="badge rounded-pill bg-secondary">Blog</span>
                    <span class="badge rounded-pill bg-secondary">Zapisy, rezerwacje</span>
                    <span class="badge rounded-pill bg-secondary">Wiele języków</span>
                </div>
                <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInRight">
                    <div class="card-carousel-container">
                        <div id="carouselIktrener" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselIktrener" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselIktrener" data-slide-to="1"></li>
                                <li data-target="#carouselIktrener" data-slide-to="2"></li>
                                <li data-target="#carouselIktrener" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="{{asset('images/iktrener/main.webp')}}" class="d-block w-100" alt="strona główna iktrener"></div>
                                <div class="carousel-item"><img src="{{asset('images/iktrener/opinions.webp')}}" class="d-block w-100" alt="strona główna iktrener"></div>
                                <div class="carousel-item"><img src="{{asset('images/iktrener/work.webp')}}" class="d-block w-100" alt="strona główna iktrener"></div>
                                <div class="carousel-item"><img src="{{asset('images/iktrener/additional.webp')}}" class="d-block w-100" alt="strona główna iktrener"></div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselIktrener" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselIktrener" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex py-5">
            <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInLeft">
                <div class="card-carousel-container" style="max-width: 300px" >
                    <div id="carouselGo2sportAndroid"class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="1"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="2"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="3"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="4"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="5"></li>
                            <li data-target="#carouselGo2sportAndroid" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="{{asset('images/go2sport-android/main.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/menu.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/objects.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/filters.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/filters2.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/about.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                            <div class="carousel-item"><img src="{{asset('images/go2sport-android/about2.webp')}}" class="d-block w-100" alt="aplikacja go2sport"></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselGo2sportAndroid" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselGo2sportAndroid" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInRight">
                <div class="badge bg-primary">
                    <a class="text-white text-decoration-none" href="https://play.google.com/store/apps/details?id=net.go2sport.app&gl=PL">Aplikacja Go2Sport - android</a>
                </div>
                <h2>Aplikacja dla firmy<br/><b style="font-size: 45px">Go2Sport</b></h2>
                <span class="badge rounded-pill bg-secondary">Aplikacja na system android</span>
                <span class="badge rounded-pill bg-secondary">Optymalizacja wydajność</span>
                <span class="badge rounded-pill bg-secondary">Optymalizacja rozmiar</span>
                <span class="badge rounded-pill bg-secondary">Optymalizacja dostępność</span>
            </div>
        </div>
    </div>
    <div class="background-gray">
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInLeft">
                    <div class="badge bg-primary">
                        <a class="text-white text-decoration-none" href="https://app.centrumklubu.pl/">Conspect Manager</a>
                    </div>
                    <h2>Platforma dla firmy<br/><b style="font-size: 45px">Club Management Center</b></h2>
                    <span class="badge rounded-pill bg-secondary">Generowanie konspektów pdf</span>
                    <span class="badge rounded-pill bg-secondary">Edytor animacji</span>
                    <span class="badge rounded-pill bg-secondary">Generowania filmów mp4</span>
                    <span class="badge rounded-pill bg-secondary">Czat</span>
                    <span class="badge rounded-pill bg-secondary">Udostępnianie zawartości</span>
                    <span class="badge rounded-pill bg-secondary">Wiele języków</span>
                </div>
                <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInRight">
                    <div class="card-carousel-container">
                        <div id="carouselCMC" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselCMC" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselCMC" data-slide-to="1"></li>
                                <li data-target="#carouselCMC" data-slide-to="2"></li>
                                <li data-target="#carouselCMC" data-slide-to="3"></li>
                                <li data-target="#carouselCMC" data-slide-to="4"></li>
                                <li data-target="#carouselCMC" data-slide-to="5"></li>
                                <li data-target="#carouselCMC" data-slide-to="6"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="{{asset('images/cmc/main.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                                <div class="carousel-item"><img src="{{asset('images/cmc/list.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                                <div class="carousel-item"><img src="{{asset('images/cmc/chat.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                                <div class="carousel-item"><img src="{{asset('images/cmc/callendar.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                                <div class="carousel-item"><img src="{{asset('images/cmc/conspect.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                                <div class="carousel-item"><img src="{{asset('images/cmc/animator.webp')}}" class="d-block w-100" alt="strona główna cmc"></div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselCMC" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselCMC" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex py-5">
            <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInLeft">
                <div class="card-carousel-container">
                    <div id="carouselGenerator" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselGenerator" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselGenerator" data-slide-to="1"></li>
                            <li data-target="#carouselGenerator" data-slide-to="2"></li>
                            <li data-target="#carouselGenerator" data-slide-to="3"></li>
                            <li data-target="#carouselGenerator" data-slide-to="4"></li>
                            <li data-target="#carouselGenerator" data-slide-to="5"></li>
                            <li data-target="#carouselGenerator" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="{{asset('images/contractgenerator/main.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/attributes.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/auth.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/builder.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/config.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/form.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                            <div class="carousel-item"><img src="{{asset('images/contractgenerator/logic.webp')}}" class="d-block w-100" alt="strona główna generator kontraktow"></div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselGenerator" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselGenerator" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInRight">
                <div class="badge bg-primary">
                    <a class="text-white text-decoration-none" href="https://generatorumowy.pl/">Generator umowy</a>
                </div>
                <h2>Platforma do <br/><b style="font-size: 45px">Generowania Umów</b></h2>
                <span class="badge rounded-pill bg-secondary">Zaawansowany kreator formularzy</span>
                <span class="badge rounded-pill bg-secondary">Uzupełnianie formularzy</span>
                <span class="badge rounded-pill bg-secondary">Generowanie umów pdf</span>
                <span class="badge rounded-pill bg-secondary">Generator bloków</span>
                <span class="badge rounded-pill bg-secondary">Zarządzanie użytkownikami</span>
                <span class="badge rounded-pill bg-secondary">Zarządzanie rolami</span>
                <span class="badge rounded-pill bg-secondary">Modułowy system</span>
                <span class="badge rounded-pill bg-secondary">Wiele języków</span>
            </div>
        </div>
    </div>
    <div class="background-gray">
        <div class="container">
            <div class="row d-flex py-5">
                <div class="col-lg-4 text-left my-auto wow order-1 order-lg-0 bounceInLeft">
                    <div class="badge bg-primary">
                        <a class="text-white text-decoration-none" href="{{route('contact')}}">Twój adres strony</a>
                    </div>
                    <h2>Strona stworzona dla<br/><b style="font-size: 45px">Ciebie</b></h2>
                    <p>Z wielką przyjemnością podejmiemy się realizacji <b>Twojej wymarzonej strony</b>.<br/><br/>
                        Zapraszamy do <b>kontaktu</b>, zrobimy <b>wszystko</b>, aby produkt przygotowany przez nas spełniał <b>każde Twoje wymaganie</b>.</p>
                    <a class="btn btn-primary mr-2 text-white" href="{{route('contact')}}">Kontakt z nami</a>
                    <a class="btn btn-outline-primary" href="{{route('offer')}}">Nasza oferta</a>

                </div>
                <div class="col-lg-8 text-right my-auto wow order-2 order-lg-0 bounceInRight">
                    <div class="p-5 m-5">
                        <div id="carouselOwnSite" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselOwnSite" data-slide-to="0" class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('images/help.svg')}}"
                                         class="d-block w-100" alt="Twoja strona">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselOwnSite" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselOwnSite" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection