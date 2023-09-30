<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller {
    public function index() {
        $dati = Comic::all();

        foreach ($dati as $key => $comic) {
            $dati[$key]['brief_description'] = $this->truncate($comic['description'], 30);
        }
        return view('index', ['dati' => $dati]);
    }

    private function truncate($text, $chars = 25) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }

    public function show($id) {
        $comic = Comic::find($id);
        return view('show', ['comicShow' => $comic]);
    }
}
