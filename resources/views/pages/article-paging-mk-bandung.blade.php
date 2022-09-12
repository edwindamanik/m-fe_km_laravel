@extends('template.template')
@section('title', 'Article Paging')

@section('content-field')
    
  {{-- navbar --}}
  <header>
    @include('components.navbar')
    @include('components.breaking-news')
  </header>

  {{-- berita artikel --}}
  @include('components.main-content-news')

  {{-- baca juga --}}
  @include('components.read-too-list')

  {{-- related tag --}}
  @include('components.related-tag')

  {{-- artikel terkait --}}
  @include('components.related-article')

    

  {{-- populer news --}}
  @include('components.populer-news')

  {{-- Slider berita terbaruu --}}
  <div style="padding: 40px 17px 62px 17px ">
     @include('components.slider')
  </div>
 


  {{-- footer --}}
  @include('components.footer')
@endsection