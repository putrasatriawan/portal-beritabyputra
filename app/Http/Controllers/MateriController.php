<?php

namespace App\Http\Controllers;

use App\Http\Requests\MateriRequest;
use App\Models\Materi;
use App\Models\Playlist;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();


        return view('back.materi.index')->with([
            'materi' => $materi,


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $playlist = Playlist::all();

        return view('back.materi.create', compact('playlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_materi);
        $data['gambar_materi'] = $request->file('gambar_materi')->store(
            'materi'
        );

        Materi::create($data);
        return redirect()->route('materi.index')->with(['success' => 'Data Berhasil di tambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materi = Materi::find($id);
        $playlist = Playlist::all();

        return view('back.materi.edit')->with([
            'playlist' => $playlist,
            'materi' => $materi
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
        //sintax jika gambar tidak di ubah maka ini script nya
        if (empty($request->file('gambar_materi'))) {
            $materi = Materi::find($id);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->judul_materi),
                'playlist_id' => $request->playlist_id,
                'is_active' => $request->is_active,
                'link' => $request->link,
            ]);
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil di ubah!']);
        } else {
            $materi = Materi::find($id);
            Storage::delete($materi->gambar_materi);
            $materi->update([
                'judul_materi' => $request->judul_materi,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->judul_materi),
                'playlist_id' => $request->playlist_id,
                'is_active' => $request->is_active,
                'link' => $request->link,
                'gambar_materi' => $request->file('gambar_materi')->store('materi')
            ]);
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil di ubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        //hapus gambar
        Storage::delete($materi->gambar_materi);

        $materi->delete();

        return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Dihapus !']);
    }
}