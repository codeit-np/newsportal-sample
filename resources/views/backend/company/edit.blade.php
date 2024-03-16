<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Edit Company</h5>
            <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('company.update', $company->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Company Name <span>*</span></label>
                    <input id="name" class="form-control" type="text" name="name"
                        value="{{ $company->name }}">
                </div>

                <div class="form-group">
                    <label for="address">Address <span>*</span></label>
                    <input id="address" class="form-control" type="text" name="address"
                        value="{{ $company->address }}">
                </div>

                <div class="form-group">
                    <label for="pan">PAN <span>(Optional)</span></label>
                    <input id="pan" class="form-control" type="text" name="pan"
                        value="{{ $company->pan }}">
                </div>

                <div class="form-group">
                    <label for="email">Email <span>(Optional)</span></label>
                    <input id="email" class="form-control" type="email" name="email"
                        value="{{ $company->email }}">
                </div>

                <div class="form-group">
                    <label for="image">Upload Logo (Optional)</label>
                    <input id="image" class="form-control-file" type="file" name="image" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Update Record</button>
            </form>
        </div>
    </div>
</x-app-layout>
