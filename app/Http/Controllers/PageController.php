<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    // il petodo index è il metodo che si usa per la home
    public function index(){
        return view('home');
    }
    // ad ogni rotta fiene associata una funzione
    public function books(){

        // SELECT * FROM `books`
        // all() restituisce tutti i record della tabella in ordine di ID
        // $books = Book::all();

        // ottengo massimo 10  libri in ordine alfabetico in base al titolo
        // le condizioni si mettono prima e la quesry termina con get()
        $books = Book::orderBy('title')->limit(10)->get();

        $title = 'Tutti i miei libri';

        return view('books', compact('books', 'title'));
    }

    public function bedBooks(){

        // estraggo tutti i libri che hanno il voto = 1
        $books = Book::where('vote', 1)->orderBy('title')->get();
        $title = 'I libri peggiori';
        return view('books', compact('books', 'title'));
    }

    public function bestBooks(){

        // estraggo tutti i libri che hanno il voto >= 4
        $books = Book::where('vote', '>=', 4)->orderBy('vote')->get();
        $title = 'I libri migliori';
        return view('books', compact('books', 'title'));
    }

    public function bookDetail($id){
        // estraggo solo il libro con id = 22
        // con first ottengo il singolo oggetto e non una array di oggetti
        // $book = Book::where('id', $id)->first();

        // se la mia condizione è cercare in base all'id lo stesso risultato lo ottengo con find()
        $book = Book::find($id);

        return view('bookDetail', compact('book'));
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
