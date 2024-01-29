<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Add New Property Button -->
    <a href="{{ route('properties.create') }}" 
           class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
            Add New Property
    </a>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        <div>
                            <h1 class="text-2xl font-semibold">Properties</h1>
                        </div>
                        <div>
                            <a href="{{ route('properties.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Add New Property
                            </a>
                        </div>
                    </div>

                    {{-- Include Success Message --}}
                    @if(session('success'))
                    <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                    @endif

                    
                    {{-- Properties Table --}}
                    <div class="mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($properties as $property)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $property->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $property->description }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="{{ route('properties.show', $property) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                        <a href="{{ route('properties.edit', $property) }}" class="ml-4 text-green-600 hover:text-green-900">Edit</a>
                                        <a href="#" onclick="confirmDelete({{ $property->id }}); return false;" class="ml-4 text-red-600 hover:text-red-900">Delete</a>
                                    </td>
                                </tr>
                                <form id="delete-form-{{ $property->id }}" action="{{ route('properties.destroy', $property) }}" method="POST" style="display: none;">

                                @endforeach
                            </tbody>
                        </table>

        @csrf
        @method('DELETE')
    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Include SweetAlert Script --}}

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
</x-app-layout>