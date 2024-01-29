<x-app-layout>
    <br>
    <br>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card">
                        <div class="card-header">
                        <!-- <h1 class="font-semibold text-5xl">{{ $property->name }}</h1> -->

                        <h1 class="font-semibold" style="font-size: 4rem;">{{ $property->name }}</h1>


                        <br>
                        <br>
                            <!-- {{ $property->name }} -->
                        </div>
                        <div class="card-body">
                            <strong>Description</strong>
                            <br>
                            <p>{{ $property->description }}</p>
                            {{-- Display other details and photos if available --}}
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('properties.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>