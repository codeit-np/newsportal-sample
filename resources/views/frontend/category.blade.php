<x-page-layout metaKeyword="news portal, nepal news" metaDescription="Nepal's no 1 news portal channel">
    <div class="container ms-auto grid grid-cols-6 gap-10 py-10">
        <div class="col-span-4">
            @foreach ($category->posts as $post)
                <a href="{{ route('news', $post->id) }}">
                    <div class="grid grid-cols-4 gap-2 mb-4 border">
                        <div class="col-span-1">
                            <img src="{{ asset($post->image) }}" class="w-44" alt="">
                        </div>
                        <div class="col-span-3">
                            <h1>{{ $post->title }}</h1>

                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <aside class="col-span-2 grid grid-cols-1 gap-3">
            <div>
                <img src="https://clickdharan.com/uploads/advertise/suman_1703342719.jpg" alt="ads">
            </div>

            <div>
                <img src="https://clickdharan.com/uploads/advertise/shresthaya%20girl%20hostel_1707582083.jpg"
                    alt="ads">
            </div>
        </aside>
    </div>
</x-page-layout>
