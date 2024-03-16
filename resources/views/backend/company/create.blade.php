<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Create Company</h5>
            <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Company Name <span>*</span></label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="address">Address <span>*</span></label>
                    <input id="address" class="form-control" type="text" name="address">
                </div>

                <div class="form-group">
                    <label for="pan">PAN <span>(Optional)</span></label>
                    <input id="pan" class="form-control" type="text" name="pan">
                </div>

                <div class="form-group">
                    <label for="email">Email <span>(Optional)</span></label>
                    <input id="email" class="form-control" type="email" name="email">
                </div>

                <div class="form-group">
                    <label for="image">Upload Logo (Optional)</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
