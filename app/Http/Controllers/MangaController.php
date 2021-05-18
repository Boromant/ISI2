<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    public function index(){
        $manga = new Manga();
        $mangas = $manga->getAll();
        return view('index',compact('mangas'));
    }
}
