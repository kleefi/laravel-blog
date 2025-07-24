@if(session('success'))
{{ session('success') }}
@endif
<table border="1">
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>
            {{ $post->title }}
        </td>
        <td>
            {{ $post->category->title??'Uncategorized' }}
        </td>
        <td>
            <a href="#">Edit</a> |
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                @method('delete')
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ route('posts.create') }}">Create new</a>