<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $penduduks = Penduduk::latest()->paginate(5);
        $penduduks = Penduduk::all();
        $i = 0;
        return view('penduduk.index',compact('penduduks', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);
      
        Penduduk::create($request->all());
       
        return redirect()->route('penduduk.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        return view('penduduk.show',compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit',compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);
      
        $penduduk->update($request->all());
      
        return redirect()->route('penduduk.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
       
        return redirect()->route('penduduk.index')
                        ->with('success','Student deleted successfully');
    }
}
