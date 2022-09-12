@extends('template.template')
@section('title', 'index-paging')

@section('content-field')

    {{-- navbar --}}
    <header>
        @include('components.navbar')
        @include('components.breaking-news')
    </header>

    <div style="padding: 0px 20px 0px 20px">
        {{-- tab-paging-news --}}
        @include('components.tag-paging-news')

        {{-- photo-collection --}}
        @include('components.photo-collection')

        {{-- video-collection --}}
        @include('components.video-collection')

        {{-- ringkas --}}
        @include('components.ringkas')

        {{-- ads-on --}}
        @include('components.ads-on')

        {{-- list-main-news --}}
        @include('components.list-main-news')

        {{-- highlight-article --}}
        @include('components.highlight-article')

        {{-- list-main-news --}}
        @include('components.list-main-news')

        {{-- highlight-article --}}
        @include('components.highlight-article')

        {{-- PAGINATION --}}

        {{-- list-main-news --}}
        @include('components.list-main-news')


        {{-- Populer-news --}}
        @include('components.populer-news')


        {{-- slider-berita-terbaru --}}
        @include('components.slider')

    </div>
    {{-- footer --}}
    @include('components.footer')
@endsection
