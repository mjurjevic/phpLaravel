<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Termin;
use App\Models\Ucionica;

class TerminController extends Controller
{
    public function pocetna()
    {
        return view('pocetna')->with('termin',Termin::all());
    }

    public function zakazi()
    {
        return view('termin')->with('zakazi',Ucionica::all());
    }

    public function prihvatiZakazi(Request $request)
    {
        $z = new Termin;
        $z-> nastavnik = $request->nastavnik;
        $z-> predmet = $request->predmet;
        $z-> trajanje = $request->trajanje;
        $z-> ucionica_id = $request->ucionica_id;
        $z->termin=$request->termin;
        $z-> status = -1;
        $z->save();
        return redirect(route('pocetna'));
    }

    public function adminPocetna()
    {
        return view('admin.spisak')->with('termin',Termin::all());
    }

    public function adminZakazi($id)
    {
        $t=Termin::find($id);
        $t->save();
        return view('admin.termin')->with('zakazi',$t);
    }

    public function adminIzmeni($id,Request $request)
    {
        $t=Termin::find($id);
        $t->status = $request->status;
        $t->save();
        return redirect(route('admin-pocetna'));
    }

}
