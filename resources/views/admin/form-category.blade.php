@section('title','Create new category')
<x-app-layout>
    <div class="max-w-xl mx-auto py-12">
        <form action="{{ isset($category)? route('categories.update',$category->id) :route('categories.store') }}"
            method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
            @csrf
            @if(isset($category))
            @method('PUT')
            @endif
            <div>
                @if(session('success'))
                <x-alert type="success" :message="session('success')" />
                @endif
                @if($errors->any())
                <ul class="mb-4 text-red-600 list-disc list-inside">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                @if(session('error'))
                <x-alert type="error" :message="session('error')" />
                @endif
                <label for="title" class="block mb-1 text-sm font-medium text-gray-700">Category Title</label>
                <input type="text" name="title" id="title" value="{{ old('title',$category->title??'') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('categories.index') }}"
                    class="text-sm text-gray-600 hover:underline hover:text-blue-600">← Back to List</a>

                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>