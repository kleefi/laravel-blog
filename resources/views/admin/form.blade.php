@section('title','Create new post')
<x-app-layout>
    <div class="py-12">
        <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST"
            enctype="multipart/form-data" class="grid md:grid-cols-3 gap-6 py-6">
            @csrf
            @if(isset($post))
            @method('PUT')
            @endif

            <div class="md:col-span-2 space-y-4">
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
                    <main>
                        <trix-toolbar id="my_toolbar"></trix-toolbar>
                        <div class="more-stuff-inbetween"></div>

                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body ?? '') }}">

                        <trix-editor
                            class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                            input="body" toolbar="my_toolbar">
                        </trix-editor>
                    </main>

                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <label for="image" class="block font-medium text-sm text-gray-700">Upload Gambar</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full">

                    @if(isset($post) && $post->image)
                    <div class="mt-2">
                        <p class="text-sm text-gray-500 mb-1">Current image:</p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Preview"
                            class="w-full h-auto rounded shadow">
                    </div>
                    @endif
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="is_slider" id="is_slider" @checked(old('is_slider', $post->is_slider ??
                    false))
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">

                    <label for="is_slider" class="text-sm text-gray-700">Tampilkan di Slider</label>
                </div>

                <div class="pt-4 space-y-3">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">
                        {{ isset($post) ? 'Update' : 'Submit' }}
                    </button>

                    @if(isset($post))
                    <a href="/{{ old('slug', $post->slug ?? '#') }}" target="_blank"
                        class="inline-block text-center w-full py-2 px-4 border border-indigo-600 text-indigo-600 rounded-md hover:bg-indigo-50 transition">
                        🔍 View Post
                    </a>
                    @endif
                </div>

            </div>
        </form>
    </div>
</x-app-layout>