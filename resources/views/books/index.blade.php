@extends('mainLayout')

@section('main-content')
<h2>Books</h2>
<p>
    <a class="btn btn-primary" href={{ route('books.create') }}>CRAETE NEW BOOK</a>
</p>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $index => $book)
        <tr>
            <td>
                {{$index + 1}}
            </td>
            <td>
                {{$book->title}}
            </td>
            <td>
                {{$book->author}}
            </td>
            <td>
                {{$book->stock}}
            </td>
            <td>
                {{$book->price}}$
            </td>
            <td>
                <a href={{ route('books.detail', ['id'=>$book->id]) }}>View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{$books->links()}}
@endsection
