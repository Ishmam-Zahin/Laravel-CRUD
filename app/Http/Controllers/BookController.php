<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(10);
        return view('books.index')->with('books', $books);
    }

    public function detail($id){
        $book = Book::find($id);
        return view('books.detail')->with('book', $book);
    }

    public function create(){
        return view('books.create');
    }

    public function store(Request $request){
        $rules = [
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|digits:13',
            'stock' => 'required|integer|min:0',
            'price' => 'required|integer|min:0',
        ];
        $request->validate($rules);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->save();

        return redirect()->route('books.index');
    }
}
