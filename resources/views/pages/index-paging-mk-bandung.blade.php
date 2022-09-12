@extends('template.template')
@section('title', 'index-paging')

@section('content-field')

    {{-- navbar --}}
    <header>
        @include('components.navbar')
        @include('components.breaking-news')
    </header>

    <div style="padding: 0px 20px 0px 20px">
        {{-- index-kanal --}}
        @include('components.index-kanal')

        {{-- list-main-news --}}
        @include('components.list-main-news')

        {{-- highlight-article --}}
        @include('components.highlight-article')

        {{-- list-main-news --}}
        @include('components.list-main-news')

        {{-- highlight-article --}}
        @include('components.highlight-article')

        {{-- list-main-news --}}
        @include('components.list-main-news')

        {{-- trending-news --}}
        @include('components.trending-tag')

        {{-- slider trending --}}
        @include('components.slider')

        {{-- populer-news --}}
        @include('components.populer-news')

        {{-- slider berita terbaru --}}
        @include('components.slider')

    </div>
    {{-- footer --}}
    @include('components.footer')
@endsection
