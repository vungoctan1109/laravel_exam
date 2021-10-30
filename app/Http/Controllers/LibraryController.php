<?php

namespace App\Http\Controllers;

use App\Models\LibraryModel;
use Illuminate\Http\Request;
use PharIo\Manifest\Library;

class LibraryController extends Controller
{
    public function showAll()
    {
        $books = LibraryModel::all();
        return view('library', compact('books'));
    }
}
