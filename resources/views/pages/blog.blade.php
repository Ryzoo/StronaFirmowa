@extends('layouts.default')

@section('meta-title') Blog @endsection
@section('meta-img') {{asset('images/default.webp')}} @endsection
@section('meta-description')
    Zapoznaj się z ciekawymi materiałami. Informacje techniczne, porady dotyczące reklam i wiele więcej.
@endsection

@section('header')
    @include('partials.header.blog')
@endsection
