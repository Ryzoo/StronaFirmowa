@extends('layouts.default')

@section('meta-title') Kontakt @endsection
@section('meta-img') {{asset('images/default.webp')}} @endsection
@section('meta-description')
    Z chęcią odpowiedmy na wszelkie pytania. Pomożemy z wyborem oferty, nakreślimy dla Ciebie dalsze kroki.
@endsection

@section('header')
    @include('partials.header.contact')
@endsection

@section('content')
    <div class="container">
        <div class="row">
        </div>
    </div>
@endsection
