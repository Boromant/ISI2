<?php

namespace App\Http\Controllers;

use App\Models\Dessinateur;
use Illuminate\Http\Request;

class DessinateurController extends Controller
{ 
    public function index()
    {
        $dessinateur = new Dessinateur();
        $dessinateurs = $dessinateur->getAll();
        return view('dessinateurs',compact('dessinateurs'));
    }
}
