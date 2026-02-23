<x-layout>
        <x-slot:heading>
            Edit Information
        </x-slot:heading>

        <form action="{{ route('contacts.update', $contacts->id) }}" method="POST" class="max-w-md mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" value="{{ $contacts->name }}">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" value="{{ $contacts->email }}">
            </div>
            {{-- <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Add Contact</button> --}}
            <div class="mb-4">
                <label for="phone" class="block text-gray-700 font-bold mb-2">Phone:</label>
                <input type="tel" name="phone" id="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" value="{{ $contacts->phone }}">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
                <input type="text" name="address" id="address" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" value="{{ $contacts->address }}">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Update Contact</button>

            

        </form>
</x-layout>