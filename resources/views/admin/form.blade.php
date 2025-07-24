<x-app-layout>
    <div class="py-12">
        {{-- Flash message --}}
        @if(session('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        @if($errors->any())
        <ul class="mb-4 text-red-600 list-disc list-inside">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if(session('error'))
        <div class="mb-4 text-red-600">{{ session('error') }}</div>
        @endif

        <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST"
            enctype="multipart/form-data" class="grid md:grid-cols-3 gap-6">
            @csrf
            @if(isset($post))
            @method('PUT')
            @endif

            <div class="md:col-span-2 space-y-4">
                <div>
                    <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $post->title ?? '') }}"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                        required>
                </div>

                <div>
                    <label for="category_id" class="block font-medium text-sm text-gray-700">Category</label>
                    <select name="category_id" id="category_id"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                        required>
                        <option value="">-- Select category --</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id ?? '') ==
                            $category->id ? 'selected' : '' }}
                            >
                            {{ $category->title }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
                    <textarea name="body" id="body" rows="8"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                        required>{{ old('body', $post->body ?? '') }}</textarea>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <a href="/{{ old('slug',$post->slug??'') }}">{{ $post->title??'' }} </a>
                    <label for="image" class="block font-medium text-sm text-gray-700">Upload Gambar</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full">

                    @if(isset($post) && $post->image)
                    <div class="mt-2">
                        <p class="text-sm text-gray-500 mb-1">Current image:</p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Preview"
                            class="w-40 h-auto rounded shadow">
                    </div>
                    @endif
                </div>

                {{-- Submit --}}
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">
                        {{ isset($post) ? 'Update' : 'Submit' }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>