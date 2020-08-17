@extends('layouts.default')

@section('meta-title') {{$post->seo_title}} @endsection
@section('meta-img') {{asset('storage/'.$post->image)}} @endsection
@section('meta-description')
    {{$post->meta_description}}
@endsection

@section('header')
    @include('partials.header.post')
@endsection
