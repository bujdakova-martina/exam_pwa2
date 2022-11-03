<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index(){
    $authors = Author::orderBy('lastname', 'ASC')->orderBy('firstname', 'ASC')->get(); // vygeneruje všetky údaje z tabuľky authors a zoradí ich podľa priezviska a mena      
    return view('authors.index')->with('authors', $authors);
    }
}
