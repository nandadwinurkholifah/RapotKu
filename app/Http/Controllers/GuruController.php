<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
use App\jnkel;
class GuruController extends Controller
{
    public function index(Request $request)
    {
    	//dd('admin.guru.index_guru');
        $gurus = guru::all();
    	return view('admin.guru.index_guru',compact('gurus'));
    }

    public function create(guru $gurus)
    {
    	//dd('admin.guru.create');
        $jnkels = jnkel::all();
    	return view('admin.guru.create',compact('jnkels'));
    }

    public function store(guru $gurus)
    {
    	guru::create([
            'nip' => request('nip'),
            'nama' => request('nama'),
            'jeniskelamin' => request('jeniskelamin'),
            'telepon' => request('telepon'),
        ]);

        $gurus = guru::all();
        return redirect()->route('admin.guru.index_guru',compact('gurus'));
    }

    public function edit($id)
    {
        //dd('admin.guru.edit');
        $gurus = guru::find($id);
        $jnkels = jnkel::all();
        return view('admin.guru.edit',compact('gurus', 'jnkels'));
    }

    public function update($id)
    {
        $gurus= guru::find($id);

        $gurus->update([
            'nip' => request('nip'),
            'nama' => request('nama'),
            'jeniskelamin' => request('jeniskelamin'),
            'telepon' => request('telepon'),
        ]);
        return redirect()->route('admin.guru.index_guru', compact('gurus'));
    }

    public function destroy($id)
    {
        $gurus = guru::find($id);
        $gurus->delete($id);

        return redirect()->route('admin.guru.index_guru');
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $gurus = guru::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%")
                ->orWhere('nip', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.guru.index_guru', compact('gurus'));
    }   
}
