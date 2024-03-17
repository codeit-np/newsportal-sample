<x-page-layout>
    <!-- Latest 1 News -->
    <section>
        <div class="container m-auto">
            @foreach ($topNews as $news)
                <div class="py-2">
                    <img src="{{ asset($news->image) }}" width="100%" alt="featured Image" loading="lazyload">
                    <h1 class="text-2xl my-4 font-bold">{{ $news->title }}</h1>
                    {!! Str::words($news->description, 100, '...') !!}
                </div>
            @endforeach
        </div>
    </section>

    <!-- News By Categories -->

    <section>
        <div class="grid grid-cols-6">
            <section class="col-span-4">
                <div>
                    @foreach ($menus as $category)
                        <div>
                            <div class="border bg-blue-500 text-white px-2">{{ $category->name }}</div>
                        </div>

                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($category->posts as $post)
                                <div>
                                    <div class="h-40">
                                        <img src="{{ asset($post->image) }}" class="w-full h-full" alt="">
                                    </div>
                                    <div>
                                        <h5 class="font-bold">{{ $post->title }}</h5>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    @endforeach
                </div>
            </section>
            <section class="col-span-2">I am Ads Container</section>
        </div>
    </section>


</x-page-layout>
