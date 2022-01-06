<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Content;
use App\Models\Galery;
use DB;

class TrescController extends Controller
{

    public function index()
    {
        return view('tresc.index', [
            'content' => Content::all()
        ]);
    }

    public function start()
    {
        return view('start', [
            'content' => Content::all(),
            'galery' => Galery::all()
        ]);
    }

    public function medycyna()
    {
        return view('medycyna', [
            'uslugi' => Service::all(),
            'content' => Content::all()
        ]);
    }

    public function kosmetyka()
    {
        return view('kosmetyka', [
            'uslugi' => Service::all(), 
            'content' => Content::all()
        ]);
    }

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
