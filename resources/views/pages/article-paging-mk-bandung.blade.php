@extends('template.template')
@section('title', 'Article Paging')

@section('content-field')
    
  {{-- navbar --}}
  <header>
    @include('components.navbar')
    @include('components.breaking-news')
  </header>

  <div style="padding: 0px 20px 0px 20px">
    {{-- berita artikel --}}
    @include('components.main-content-news')

    {{-- baca juga --}}
    @include('components.read-too-list')

    {{-- related tag --}}
    @include('components.related-tag')

    {{-- artikel terkait --}}
    @include('components.related-article')

    {{-- trending tag --}}
    @include('components.trending-tag')

    {{-- Slider trending tag --}}
    @include('components.slider')

    {{-- populer news --}}
    @include('components.populer-news')

    {{-- Slider berita terbaruu --}}
      @include('components.slider')
  </div>

  {{-- footer --}}
  @include('components.footer')
@endsection