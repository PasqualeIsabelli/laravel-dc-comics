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
            'title' => 'required|string|max:255',
            'description' => 'nullable|text',
            'thumb' => 'required|text',
            'price' => 'required|decimal|integer',
            'series' => 'nullable|string|max:100',
            'sale_date' => 'nullable|date',
            'type' => ['nullable', Rule::in(['comic book', 'graphic novel'])],
            'artists' => 'nullable|text',
            'writers' => 'nullable|text',
        ]);

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers'];

        $newComic->save();

        return redirect()->route('show', $newComic->id);
    }
}
