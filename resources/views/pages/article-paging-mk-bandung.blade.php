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

    {{-- trending tag --}}
    <div style="padding: 30px 15px 30px 15px">
      @include('components.trending-tag')

</div>
{{-- Slider trending tag --}}
<div style="padding: 30px 17px 48px 18px; ">
  @include('components.slider')
</div>


{{-- populer news --}}
<div style="padding: 0px 19px 40px 22px;">
   @include('components.populer-news')
</div>
  
 

  {{-- Slider berita terbaruu --}}
  <div style="padding: 40px 17px 62px 17px ">
     @include('components.slider')
  </div>
 


  {{-- footer --}}
  @include('components.footer')
@endsection