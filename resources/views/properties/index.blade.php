@extends('layouts.app')

@section('content')
    <div class="row mb-2">
        <div class="col">
            <h1>Properties</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('properties.create') }}" class="btn btn-primary">Add New Property</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($properties as $property)
                        <tr>
                            <td>{{ $property->name }}</td>
                            <td>{{ $property->description }}</td>
                            <td>
                                <a href="{{ route('properties.show', $property) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('properties.edit', $property) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('properties.destroy', $property) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button type="submit" class="btn btn-danger btn-sm">Delete</button> -->
                                    <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $property->id }}); return false;">Delete</button>

                                </form>
                                <form id="delete-form-{{ $property->id }}" action="{{ route('properties.destroy', $property) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

                            </td>
                        </tr>
                        <!-- <form id="delete-form-{{ $property->id }}" action="{{ route('properties.destroy', $property) }}" method="POST" style="display: none;"> -->
        @csrf
        @method('DELETE')
    </form>
                    @endforeach
                </tbody>
            </table>
            
    <script>
        function confirmDelete(propertyId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + propertyId).submit();
                }
            })
        }
    </script>
        </div>
    </div>

@endsection
