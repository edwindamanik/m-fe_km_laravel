@extends('template.template')
@section('title', 'Homepage')

@section('content-field')
    
  {{-- navbar --}}
  <header>
    @include('components.navbar')
    @include('components.breaking-news')
  </header>

  {{-- berita utama --}}
  @include('components.main-news')

  {{-- trending tag --}}
  <div style="padding: 0px 20px 0px 20px">
    @include('components.ads-on')
    @include('components.trending-tag')
    @include('components.list-main-news')
    @include('components.slider')
    @include('components.ads-main')
  </div>

  {{-- footer --}}
  @include('components.footer')
@endsection