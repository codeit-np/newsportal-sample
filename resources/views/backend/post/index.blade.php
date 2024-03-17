<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Posts</h5>
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Views</th>
                        <th>Post on</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $index => $post)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>
                                <a href="{{ asset($post->image) }}" target="_blank">
                                    <img src="{{ asset($post->image) }}" width="100" alt="">
                                </a>
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                @foreach ($post->categories as $category)
                                    <span class="badge bg-warning">{{ $category->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $post->views }}
                            </td>
                            <td>
                                {{ $post->created_at }}
                            </td>
                            <td>
                                <a href="">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
