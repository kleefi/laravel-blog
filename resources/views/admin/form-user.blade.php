@section('title', isset($user) ? 'Edit User' : 'Create New User')

<x-app-layout>
    <div class="max-w-xl mx-auto py-12">
        <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST"
            class="space-y-6 bg-white p-6 rounded-lg shadow-md">
            @csrf
            @if(isset($user))
            @method('PUT')
            @endif

            @if(session('success'))
            <x-alert type="success" :message="session('success')" />
            @endif

            @if(session('error'))
            <x-alert type="error" :message="session('error')" />
            @endif

            @if($errors->any())
            <ul class="mb-4 text-red-600 list-disc list-inside text-sm">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif

            <div>
                <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name ?? '') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email ?? '') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    {{ isset($user) ? '' : 'required' }}>
                @if(isset($user))
                <small class="text-sm text-gray-500">Kosongkan jika tidak ingin mengubah password.</small>
                @endif
            </div>

            <div>
                <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-700">Confirm
                    Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    {{ isset($user) ? '' : 'required' }}>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('users.index') }}" class="text-sm text-gray-600 hover:underline hover:text-blue-600">←
                    Back to List</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    {{ isset($user) ? 'Update User' : 'Create User' }}
                </button>
            </div>
        </form>
    </div>
</x-app-layout>