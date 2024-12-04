@extends('mainLayout')

@section('main-content')
<h2>Create a New Book</h2>
<form method="post" action={{ route('books.store' ) }}>
    @csrf
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" placeholder="title" name="title" value={{old('title')}}>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" placeholder="author" name="author" value={{old('author')}}>
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control" placeholder="Isbn" name="isbn" value={{old('isbn')}}>
        @error('isbn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control" placeholder="stock" name="stock" value={{old('stock')}}>
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" placeholder="price" name="price" value={{old('price')}}>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">SUBMIT</button>
        <a class="btn btn-danger" href={{ route('books.index') }}>GO BACK</a>
    </div>

</form>
@endsection
