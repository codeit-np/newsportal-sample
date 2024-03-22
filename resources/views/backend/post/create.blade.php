<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Create Post</h5>
            <a href="{{ route('post.index') }}" class="btn btn-primary">Go back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title <span>*</span></label>
                    <input id="title" class="form-control" type="text" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Description <span>*</span></label>
                    <textarea name="description" class="summernote"></textarea>
                </div>

                <div class="form-group">
                    <label for="tags">Tags <span>(Optional seperated by commas (,))</span></label>
                    <input id="tags" class="form-control" type="text" name="tags">
                </div>

                <div class="form-group">
                    <label for="meta_keyword">Meta Keywords (Optional)</label>
                    <input id="meta_keyword" class="form-control" type="text" name="meta_keyword">
                </div>

                <div class="form-group">
                    <label for="meta_description">Meta Description (Optional)</label>
                    <textarea id="meta_description" class="form-control" name="meta_description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="category">Select Categories</label>
                    <select id="category" class="form-control select2" name="category[]" multiple>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
