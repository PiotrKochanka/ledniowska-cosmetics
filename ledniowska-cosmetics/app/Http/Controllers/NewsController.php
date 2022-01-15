<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use File;
use DB;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    public function create()
    {
        return view('news.dodaj_nowosc');
    }

    public function store(request $request)
    {
        $news = new News();
        $news->name = $request->name;
        if($request->hasfile('zdjecie'))
        {
            $file = $request->file('zdjecie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galery/', $filename);
            $news->zdjecie = $filename;
        }

        $news->save();

        return redirect('nowosci');
        
    }

    public function showData($id)
    {
        $news = News::find($id);
        return view('news.edytuj_nowosc', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->name = $request->name;
        if($request->hasfile('zdjecie'))
        {
            $destination = 'galery/'.$news->zdjecie;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('zdjecie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galery/', $filename);
            $news->zdjecie = $filename;
        }
        $news->update();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }
    
    public function destroy(Request $request, $id)
    {
        $news = News::find($id);

        $destination = 'galery/'.$news->zdjecie;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        DB::delete('delete from news where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
