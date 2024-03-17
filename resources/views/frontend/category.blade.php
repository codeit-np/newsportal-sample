<x-page-layout>
    <div class="container ms-auto grid grid-cols-6 gap-10">
        <div class="col-span-4">
            @foreach ($category->posts as $post)
                <div class="grid grid-cols-4 gap-2">
                    <div class="col-span-1">
                        <img src="{{ asset($post->image) }}" class="w-44" alt="">
                    </div>
                    <div class="col-span-3">
                        <h1>{{ $post->title }}</h1>

                    </div>
                </div>
            @endforeach
        </div>
        <aside class="col-span-2">Ads</aside>
    </div>
</x-page-layout>
