<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Categories</h5>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $index => $category)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('category.edit', $category->id) }}">Edit</a>
                                    <button type="submit">Delete</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
