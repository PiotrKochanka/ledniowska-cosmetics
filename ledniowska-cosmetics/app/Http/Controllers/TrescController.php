<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Content;
use App\Models\Galery;
use App\Models\Price_list;
use App\Models\News;
use DB;

class TrescController extends Controller
{

    /* Treść w panelu CMS */
    public function index()
    {
        return view('tresc.index', [
            'content' => Content::all()
        ]);
    }

    /* Treść strona startowa*/
    public function start()
    {
        return view('start', [
            'content' => Content::all(),
            'galery' => Galery::all(),
            'news' => News::all()
        ]);
    }

    /* Treść medycyna */
    public function medycyna()
    {
        return view('medycyna', [
            'uslugi' => Service::all(),
            'content' => Content::all()
        ]);
    }

    /* Treść kosmetyka */
    public function kosmetyka()
    {
        return view('kosmetyka', [
            'uslugi' => Service::all(), 
            'content' => Content::all()
        ]);
    }

    /* Treść cennik */
    public function cennik()
    {
        return view('cennik', [
            'uslugi' => Service::all(),
            'ceny' => Price_list::all()
        ]);
    }

    /* Treść galeria */
    public function galeria()
    {
        return view('pelna_galeria', [
            'galeria' => Galery::all()
        ]);
    }


    /* Zmiana treści */
    public function showData($id)
    {
        $data = Content::find($id);
        return view('tresc.edytuj_tresc', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data=Content::find($request->id);
        $data->tytul=$request->tytul;
        $data->skrot=$request->skrot;
        $data->save();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }
}
