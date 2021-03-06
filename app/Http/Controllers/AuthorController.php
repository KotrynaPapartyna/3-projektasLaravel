<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // atsakingas uz irasu atvaizdavima
    {
        $authors=Author::all(); // vykdo ta ka select- pasirenka visus irasus is lenteles authors
        return view("author.index",["authors"=>$authors]); //grazina i vaizda index blade dokumenta- visus autorius
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // atsakinga uz formos atvaizdavima, kuri leidzia sukurti irasus
    {
        return view ("author.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // atsakinga uz duomenu paemima is formos ir irasyma i DB
    {
        $author=new Author;

        // DB stulpelio pavadinimas  =   input laukelio vardas kaip formoje
        $author->name=$request->author_name;
        $author->surname=$request->author_surname;
        $author->username=$request->author_username;

        $author->save(); // insert komanda i DB

        return redirect()->route("author.index"); // kai viska suraso- grazina i pradini psl

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view ("author.show", ["author"=>$author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author) // atsakinga uz autoriaus redagavimo formos atvaizdavima
    {
        return view("author.edit", ["author"=>$author]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author) // atsakinga uz atnaujinima DB
    {

        // DB stulpelio pavadinimas  =   input laukelio vardas kaip formoje
        $author->name=$request->author_name; // I STULPELI IRASO NAUJUS DUOMENIS
        $author->surname=$request->author_surname; // I STULPELI IRASO NAUJUS DUOMENIS
        $author->username=$request->author_username; // I STULPELI IRASO NAUJUS DUOMENIS

        $author->save(); // JAU ISSAUGO UPDATINTUS DUOMENIS

        // -> grazina i kelia- t.y. psl i kur
        return redirect()->route("author.index"); // kai visi duomenys isiraso, grazina i pradini psl

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route("author.index");
    }
}
