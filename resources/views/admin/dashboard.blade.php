@section('title', 'Dashboard')

<x-app-layout>
    <div class="py-16 px-6">
        <h1 class="text-2xl font-semibold mb-6">Welcome back, {{ auth()->user()->name }}!</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold">{{ $postsCount }}</h2>
                <p class="text-gray-600">Posts</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold">{{ $categoriesCount }}</h2>
                <p class="text-gray-600">Categories</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold">{{ $usersCount }}</h2>
                <p class="text-gray-600">Users</p>
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-6 mb-8">
            <h2 class="text-lg font-semibold mb-4">Quick Actions</h2>
            <div class="flex flex-wrap gap-4 items-center">
                <a href="{{ route('posts.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                    <i class="fa-solid fa-newspaper w-5 h-5 text-white dark:text-gray-400"></i> Create New Posts
                </a>
                <a href="{{ route('categories.index') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                    <i class="fa-solid fa-tags w-5 h-5 text-white dark:text-gray-400"></i> Manage Categories
                </a>
                @role('admin')
                <a href="{{ route('users.index') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm">
                    <i class="fa-solid fa-user w-5 h-5 text-white dark:text-gray-400"></i> Manage User
                </a>
                @endrole
            </div>
        </div>

        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-4">Recent Posts</h2>
            <table class="min-w-full text-left text-sm">
                <thead>
                    <tr>
                        <th class="pb-2">Title</th>
                        <th class="pb-2">Author</th>
                        <th class="pb-2">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentPosts as $post)
                    <tr class="border-t">
                        <td class="py-2">{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('d M Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>