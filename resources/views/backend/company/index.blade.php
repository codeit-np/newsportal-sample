<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>Company Details</h5>
            @if (empty($company))
                <a href="{{ route('company.create') }}" class="btn btn-primary">Create Company</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Logo</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if (empty($company))
                        <tr>
                            <td>No Data Available</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>
                                <img src="{{ asset($company->image) }}" width="100" alt="">
                            </td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->address }}</td>
                            <td>{{ $company->email }}</td>
                            <td>
                                <a href="{{ route('company.edit', $company->id) }}">Edit</a>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
