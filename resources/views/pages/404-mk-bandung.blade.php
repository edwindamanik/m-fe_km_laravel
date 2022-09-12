@extends('template.template')
@section('title', 'Homepage')

@section('content-field')
    
  {{-- navbar --}}
  <header>
    @include('components.navbar')
    @include('components.breaking-news')
  </header>

  {{-- berita utama --}}
  @include('components.not-found')

  {{-- trending tag --}}
  <div style="padding: 0px 20px 0px 20px">
    {{-- slider trending --}}
    @include('components.slider')

    @include('components.populer-news')
    
    {{-- slider berita tebaru --}}
    @include('components.slider')
  </div>

  {{-- footer --}}
  @include('components.footer')
@endsection