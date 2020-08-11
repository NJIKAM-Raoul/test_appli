<?php

namespace App\Http\Controllers;

use App\Enfant;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homes()
    {
        return View('pages.homes');
    }
    
    public function about()
    {
        $enfant= Enfant::all();
        return View('pages.about',compact('enfant'));
    }

    public function imprimer()
    {
        $enfant = Enfant::all();
        $reponse=Enfant::whereId($_GET['id'])->get();
        $rep=Enfant::count();

        return view('pages.imprime',compact('enfant','rep','reponse'));
    }
}
