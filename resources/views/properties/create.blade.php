<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add New Property
            </h2>

            <form action="{{ route('properties.store') }}" method="POST" class="mt-4">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="description" id="description" required></textarea>
                </div>

                {{-- Additional Fields --}}
                <div class="mb-4">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="address" id="address" required>
                </div>

                <div class="mb-4">
                    <label for="beds" class="block text-gray-700 text-sm font-bold mb-2">Beds:</label>
                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="beds" id="beds" required>
                </div>

                <div class="mb-4">
                    <label for="bath" class="block text-gray-700 text-sm font-bold mb-2">Bath:</label>
                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="bath" id="bath" required>
                </div>

                <div class="mb-4">
                    <label for="zipcode" class="block text-gray-700 text-sm font-bold mb-2">Zipcode:</label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="zipcode" id="zipcode" required>
                </div>

                <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105" style="background-color: black;">
                    Create Property
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
