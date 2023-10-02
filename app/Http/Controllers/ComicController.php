<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\Models\Comic;

class ComicController extends Controller {
    public function index() {
        $dati = Comic::all();
        return view('index', ['dati' => $dati]);
    }

    public function show($id) {
        $comic = Comic::find($id);
        return view('show', ['comicShow' => $comic]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|integer',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => ['required', Rule::in(['comic book', 'graphic novel'])],
            'artists' => 'required|string',
            'writers' => 'required|string',
        ]);

        $data["artists"] = explode(', ', $data["artists"]);
        $data["writers"] = explode(', ', $data["writers"]);

        $newComic = new Comic();

        $newComic->fill($data);

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
        // $newComic->artists = explode(', ', $data['artists']);
        // $newComic->writers = explode(', ', $data['writers']);

        $newComic->save();

        return redirect()->route('index');
    }
}
