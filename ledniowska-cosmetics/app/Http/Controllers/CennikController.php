<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price_list;
use App\Models\Service;
use DB;

class CennikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cennik.index', [
            'ceny' => Price_list::all(),
            'service' => Service::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cennik.dodaj_zabieg', [
            'ceny' => Price_list::all(),
            'service' => Service::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cennik = new Price_list();

        $cennik->id_uslugi = $request->id_uslugi;
        $cennik->zabieg = $request->zabieg;
        $cennik->cena = $request->cena;

        $cennik->save();

        return redirect('cms-cennik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData($id)
    {
        $cennik = Price_list::find($id);
        return view('cennik.edytuj_zabieg', compact('cennik'), [
            'service' => Service::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cennik = Price_list::find($id);
        $cennik->id_uslugi = $request->id_uslugi;
        $cennik->zabieg = $request->zabieg;
        $cennik->cena = $request->cena;
        $cennik->update();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from price_lists where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
