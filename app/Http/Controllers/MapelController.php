<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
class MapelController extends Controller
{
    public function index(mapel $mapels)
    {
    	$mapels = mapel::all();
    	return view('admin.mapel.index',compact('mapels'));
    }

    public function create()
    {
    	return view('admin.mapel.create');
    }

    public function store(mapel $mapels)
    {
    	mapel::create([
    		'kode' => request('kode'),
    		'matapelajaran' => request('matapelajaran'),
    		'pengajar' => request('pengajar')
    	]);

    	$mapels = mapel::all();
    	return view('admin.mapel.index',compact('mapels'));
    }

    public function edit($id)
    {
        $mapels= mapel::find($id);
        return view('admin.mapel.edit',compact('mapels'));
    }

    public function update($id)
    {
        $mapels = mapel::find($id);
        $mapels->update([
            'kode'=>request('kode'),
            'matapelajaran'=>request('matapelajaran'),
            'pengajar'=>request('pengajar'),
        ]);

        return redirect()->route('admin.mapel.index',compact('mapels'));
    }

    public function destroy($id)
    {
        $mapels = mapel::find($id);
        $mapels->delete($id);

        return redirect()->route('admin.mapel.index');
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $mapels = mapel::when($request->keyword, function ($query) use ($request) {
            $query->where('pengajar', 'like', "%{$request->keyword}%")
                ->orWhere('matapelajaran', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.mapel.index', compact('mapels'));
    }
}
