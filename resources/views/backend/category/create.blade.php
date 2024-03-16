<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Create Category</h5>
            <a href="{{ route('category.index') }}" class="btn btn-primary">Go back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name <span>*</span></label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="slug">Slug <span>*</span></label>
                    <input id="slug" class="form-control" type="text" name="slug">
                </div>

                <button type="submit" class="btn btn-primary">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
