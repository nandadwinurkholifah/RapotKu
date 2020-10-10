<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\nilai;
class NilaiController extends Controller
{
    public function index(nilai $nilais)
    {   
       $nilais = nilai::all();
    	return view('admin.nilai.index',compact('nilais'));
    }

    public function create(nilai $nilais)
    {
    	return view('admin.nilai.create');
    }

    public function store(nilai $nilais)
    {
    	nilai::create([
    		'noinduk' => request('noinduk'),
    		'nama' => request('nama'),
    		'semester' => request('semester'),
    		'matapelajaran' => request('matapelajaran'),
    		'tugas1' => request('tugas1'),
    		'tugas2' => request('tugas2'),
    		'tugas3' => request('tugas3'),
    		'UTS' => request('UTS'),
    		'UAS' => request('UAS'),
    	]);

    	$nilais = nilai::all();
    	return view('admin.nilai.index',compact('nilais'));
    }

    public function edit($id)
    {
       // dd('admin.nilai.edit');
        $nilais = nilai::find($id);
        return view('admin.nilai.edit',compact('nilais'));
    }

    public function update($id)
    {
        $nilais = nilai::find($id);
        $nilais->update([
            'noinduk' => request('noinduk'),
            'nama' => request('nama'),
            'semester' => request('semester'),
            'matapelajaran' => request('matapelajaran'),
            'tugas1' => request('tugas1'),
            'tugas2' => request('tugas2'),
            'tugas3' => request('tugas3'),
            'UTS' => request('UTS'),
            'UAS' => request('UAS'),
        ]);
        return redirect()->route('admin.nilai.index',compact('nilais'));
    }

    public function destroy($id)
    {
        $nilais = nilai::find($id);
        $nilais->delete($id);

        return redirect()->route('admin.nilai.index');
    }
    
    public function search(\Illuminate\Http\Request $request)
    {
        $nilais = nilai::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%")
                ->orWhere('matapelajaran', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.nilai.index', compact('nilais'));
    }   
}
