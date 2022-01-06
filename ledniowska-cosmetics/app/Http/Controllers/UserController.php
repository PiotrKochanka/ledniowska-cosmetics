<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function showData($id)
    {
        $data = User::find($id);
        return view('users.edytuj_uzytkownika', ['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data=User::find($request->id);
        $data->name=$request->name;
        $data->surname=$request->surname;
        $data->email=$request->email;
        $data->save();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }
}
