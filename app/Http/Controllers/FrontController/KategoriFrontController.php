<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        $kategori = Kategori::all();

        return view('front.kategori_front.kategori_view_front')->with([
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Kategori $kategori)
    // {
    //     $artikelall = $kategori->Artikel->get();

    //     return $artikelall;
    //     // $kategori = Kategori::where('slug', $slug)->first();
    //     // return view('front.kategori_front.kategori_view')->with('kategori', $kategori);
    // }
    public function show_kategori($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        if ($kategori) {
            $artikel = Artikel::where('kategori_id', $kategori->id)->get();
            return view('front.kategori_front.kategori_view_front')->with([
                'artikel' => $artikel,
                'kategori' => $kategori,
            ]);
        } else {
            return redirect('/');
        }

        // $artikelall = $kategori->Artikel->get();
        // return $kategori;
        // $kategori = Kategori::where('slug', $slug)->first();
        // return view('front.kategori_front.kategori_view')->with('kategori', $kategori);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}