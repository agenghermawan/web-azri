<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Wisata::with('kategori')->get();
            return view('backend.wisata.list')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        return view('backend.wisata.create')->with([
            'data' => $data
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
        
        $data = $request -> all();
        $insert =  Wisata::create($data);
        
        if ($request -> kategori_id == 1 ) {
                 return redirect()->route(('list-wisata-sejarah'));
        }
        if ($request -> kategori_id == 2 ) {
            return redirect()->route(('list-wisata-kuliner'));
        }
        if ($request -> kategori_id == 3 ) {
            return redirect()->route(('list-wisata-keluarga'));
        }
        if ($request -> kategori_id == 4 ) {
            return redirect()->route(('list-wisata-alam'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Wisata::with('galleries','kategori')->findOrFail($id);
        return view('backend.showwisata',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Wisata::with('galleries','kategori')->findOrFail($id);
        return view('backend.wisata.edit')->with([
            'data' => $data
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
        $data = $request -> all();
        $item = Wisata::findOrFail($id);
        $item -> update($data);

        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Wisata::findOrFail($id)->delete();
        return redirect()->back();

    }
}
