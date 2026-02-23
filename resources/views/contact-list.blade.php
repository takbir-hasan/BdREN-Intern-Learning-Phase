<x-layout>
    <x-slot:heading>
        Contact List
    </x-slot:heading>

    <div class="container mx-auto px-4 py-8">
        
        <div class="flex justify-end mb-4">
            <a href="{{ route('contacts.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow">
                + Add New Contact
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if($contacts->count() > 0)
            <div class="">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">Phone</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-center text-gray-500 uppercase tracking-wider">Address</th>
                            <th colspan="2" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($contacts as $contact)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $contact->phone }}</td>
                                <td class="px-6 py-4  text-sm text-gray-900">{{ $contact->address }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="text-indigo-600 hover:text-indigo-900 font-semibold">
                                        Edit
                                    </a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE') <button type="submit" class="text-red-600 hover:text-red-900 font-semibold" onclick="return confirm('Are you sure you want to delete this contact?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-8">
                <p class="text-gray-500">No contacts found.</p>
                <a href="{{ route('contacts.create') }}" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Add First Contact
                </a>
            </div>
        @endif
        
    </div>
</x-layout>