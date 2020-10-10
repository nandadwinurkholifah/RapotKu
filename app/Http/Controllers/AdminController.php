<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tkj;
use App\jnkel;
class AdminController extends Controller
{
    public function dashboard()
	{
		return view('admin.dashboard');
	}

	public function tkj(tkj $tkjs)
	{
		$tkjs = tkj::all();
		return view('admin.tkj.index_tkj',compact('tkjs'));
	}

	public function create(tkj $tkjs)
	{
		$jnkels = jnkel::all();
		return view('admin.tkj.create',compact('jnkels'));
	}

	public function store(tkj $tkjs)
	{
		tkj::create([
    		'noinduk' => request('noinduk'),
            'nama' => request('nama'),
    		'jeniskelamin' => request('jeniskelamin'),
            'alamat' => request('alamat')
    	]);

    	// return view('admin.tkj.index_tkj');
    	$tkjs = tkj::all();
		return redirect()->route('admin.tkj.index_tkj',compact('tkjs'));
	}

	public function edit($id)
	{
		//dd('admin.tkj.edit');
		$tkjs= tkj::find($id);
		$jnkels = jnkel::all();
		return view('admin.tkj.edit',compact('tkjs', 'jnkels'));
	}
	
	public function update($id)
	{
		$tkjs= tkj::find($id);

		$tkjs->update([
    		'noinduk' => request('noinduk'),
            'nama' => request('nama'),
    		'jeniskelamin' => request('jeniskelamin'),
            'alamat' => request('alamat')
   		]);
   		return redirect()->route('admin.tkj.index_tkj');
	}

	public function destroy( $id)
	{
		$tkjs= tkj::find($id);
		$tkjs->delete($id);

		return redirect()->route('admin.tkj.index_tkj');
	}

	public function search(\Illuminate\Http\Request $request)
    {
        $tkjs = tkj::when($request->keyword, function ($query) use ($request) {
            $query->where('nama', 'like', "%{$request->keyword}%")
                ->orWhere('alamat', 'like', "%{$request->keyword}%");
        })->get();
        return view('admin.tkj.index_tkj', compact('tkjs'));
    }   

}
