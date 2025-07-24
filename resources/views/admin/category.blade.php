@if(session('success'))
{{ session('success') }}
@endif
<table border="1">
    <tr>
        <th>Title</th>
        <th>Action</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <td>
            {{ $category->title }}
        </td>
        <td>
            <a href="#">Edit</a> |
            <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                @method('delete')
                @csrf
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a href="{{ route('categories.create') }}">Create new</a>