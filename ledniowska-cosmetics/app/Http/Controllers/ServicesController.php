<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Service;
use DB;
use File;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; 


class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('uslugi.index', [
            'uslugi' => Service::all()
        ]);
    }

    protected function validator(array $data)
    {
    }

    public function create()
    {
        return view('uslugi.dodaj_usluge');
    }

    public function store(Request $request)
    {
        $service = new Service();

        $service->kategoria = $request->kategoria;
        if($request->hasfile('zdjecie'))
        {
            $file = $request->file('zdjecie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galery/', $filename);
            $service->zdjecie = $filename;
        }
        $service->tytul = $request->tytul;
        $service->skrot = $request->skrot;

        $service->save();

        return redirect('uslugi');
    }

    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }

    public function showData($id)
    {
        $service = Service::find($id);
        return view('uslugi.edytuj_usluge', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->kategoria = $request->kategoria;
        if($request->hasfile('zdjecie'))
        {
            $destination = 'galery/'.$service->zdjecie;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('zdjecie');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galery/', $filename);
            $service->zdjecie = $filename;
        }
        $service->tytul=$request->tytul;
        $service->skrot=$request->skrot;
        $service->update();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }

    public function destroy(Request $request, $id)
    {
        $service = Service::find($id);

        $destination = 'galery/'.$service->zdjecie;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        DB::delete('delete from services where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
