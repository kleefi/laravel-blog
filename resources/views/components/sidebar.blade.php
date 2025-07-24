<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">

    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->routeIs('dashboard') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <i class="fa-solid fa-house w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('posts.index') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('dashboard/posts*') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <i class="fa-solid fa-newspaper w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                    <span class="ms-3">Posts</span>
                </a>
            </li>

            <li>
                <a href="{{ route('categories.index') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('dashboard/categories*') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <i class="fa-solid fa-tags w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                    <span class="ms-3">Categories</span>
                </a>
            </li>

            <li>
                <a href="{{ route('users.index') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('dashboard/users*') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <i class="fa-solid fa-user w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                    <span class="ms-3">Users</span>
                </a>
            </li>

            <li>
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center p-2 rounded-lg group {{ request()->is('dashboard/profile*') ? 'bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white' : 'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                    <i class="fa-solid fa-gear w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                    <span class="ms-3">Settings</span>
                </a>
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                    @csrf
                    <button type="submit"
                        class="flex items-center w-full p-2 text-red-600 rounded-lg hover:bg-red-100 dark:hover:bg-red-700 group">
                        <i class="fa-solid fa-right-from-bracket w-5 h-5 text-red-600 dark:text-red-400"></i>
                        <span class="ms-3">Sign out</span>
                    </button>
                </form>
            </li>

        </ul>
    </div>
</aside>