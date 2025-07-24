@if(session('success'))
{{ session('success') }}
@endif
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
@if(session('error'))
{{ session('error') }}
@endif
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title</label>
    <input type="text" name="title"><br>
    <label>Gambar</label>
    <input type="file" name="image"><br>
    <label>Category</label>
    <select name="category_id">
        <option>Select category</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{$category->title}}</option>
        @endforeach
    </select><br>
    <label>Text</label>
    <textarea name="body"></textarea><br>
    <button>Submit</button>
</form>