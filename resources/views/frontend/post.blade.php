<x-page-layout metaKeyword="{{ $post->meta_keyword }}" metaDescription="{{ $post->meta_description }}">
    <div class="container m-auto">
        <img src="{{ asset($post->image) }}" alt="">
        <h1>{{ $post->title }}</h1>
        {!! $post->description !!}
        <div class="fb-comments" data-href="https://codeit.com.np" data-width="" data-numposts="5"></div>
    </div>
</x-page-layout>
