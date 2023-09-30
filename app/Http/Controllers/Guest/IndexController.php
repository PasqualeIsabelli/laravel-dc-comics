<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/*use App\Models\NomeModel;*/

class IndexController extends Controller
{
    public function index() {
        $data = [
            /* "exString" => "string", */
            /* "examples" => Example::all(), */];
        return view('home', $data);
    }
}
