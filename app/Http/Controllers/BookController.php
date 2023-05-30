<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\books;

class BookController extends Controller
{
    public function index() {
        $highlight = books::where('id', '=', '1')->get();
        $latest = books::orderBy('tanggal', 'desc')->take(4)->get();
        $books = books::latest()->simplePaginate(3);

        return view('home', [
            'highlight' => $highlight,
            'latest' => $latest,
            'books' => $books,
        ]);
    }

    public function detail($id) {
        $books = books::find($id);

        return view('detail', [
            'books' => $books,
        ]);
    }
}
