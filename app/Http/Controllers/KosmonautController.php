<?php

namespace App\Http\Controllers;

use App\Models\Kosmonaut;
use Illuminate\Http\Request;

class KosmonautController extends Controller
{
    public function index()
    {
    	$kosmonauti = Kosmonaut::all();

        return view('kosmonauti.index', ['kosmonauti' => $kosmonauti]);
    }

    public function create()
    {
        return view('kosmonauti.create');
    }

    public function store()
    {
    	$data = request()->validate([
    		'first_name' => 'required|min:3',
    		'surname' => 'required|min:2',
    		'dob' => 'required|date',
    		'superpower' => 'required'
    	]);

    	$kosmonaut = new Kosmonaut();
    	$kosmonaut->jmeno = request('first_name');
    	$kosmonaut->prijmeni = request('surname');
    	$kosmonaut->datum_narozeni = request('dob');
    	$kosmonaut->superschopnost = request('superpower');
    	$kosmonaut->save();

    	return redirect('/');
    }

    public function edit(Kosmonaut $kosmonaut)
    {
        return view('kosmonauti.edit', compact('kosmonaut'));
    }

    public function update(Kosmonaut $kosmonaut)
    {
        $data = request()->validate([
    		'first_name' => 'required|min:3',
    		'surname' => 'required|min:2',
    		'dob' => 'required|date',
    		'superpower' => 'required'
    	]);

    	$id = request('id');
    	$kosmonaut = Kosmonaut::find($id);
    	$kosmonaut->jmeno = request('first_name');
    	$kosmonaut->prijmeni = request('surname');
    	$kosmonaut->datum_narozeni = request('dob');
    	$kosmonaut->superschopnost = request('superpower');
    	$kosmonaut->save();

        return redirect("/");
    }

    public function delete($id)
    {
    	$kosmonaut = Kosmonaut::find($id);
    	$kosmonaut->delete();

        return redirect("/");
    }
}
