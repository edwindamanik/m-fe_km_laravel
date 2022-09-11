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
  <div style="padding: 20px">
    @include('components.trending-tag')
    @include('components.list-main-news')
    @include('components.slider')
  </div>

  {{-- footer --}}
  @include('components.footer')
@endsection