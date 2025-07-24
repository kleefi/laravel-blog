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
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label>Title</label>
    <input type="text" name="title">
    <button>Submit</button>
    <a href="{{ route('categories.index') }}">Back</a>
</form>