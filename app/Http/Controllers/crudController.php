<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slug = "crud";
        $crud =Menu::all();
        return view("crud",compact("slug","crud"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar'    => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'namaMenu'  => 'required',
            'hargaMenu'=> 'required',
        ]);

        $img = $request->file('gambar');
        $img->storeAs('public/img',$img->hashName());
        $crud = Menu::create([
            'gambar'    => $img->hashName(),
            'namaMenu' => $request->namaMenu,
            'hargaMenu' => $request->hargaMenu,
        ]);
        return redirect('/crud')->with(['success' => 'Menu Berhasil ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'namaMenu'  => 'required',
            'hargaMenu'=> 'required'
        ]);
        DB::table('daftarMenu')->where('idMenu',$id)->update([
            'namaMenu' => $request->namaMenu,
            'hargaMenu' => $request->hargaMenu,
        ]);
        return redirect('/crud')->with(['success' => 'Menu Berhasil diupdate']);
    }

    public function updateGambar(Request $request, string $id)
    {
        $validated = $request->validate([
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $img = $request->file('gambar');
        if ($img) {
            $gambarBaru = $img->hashName();
            $img->storeAs('public/img', $gambarBaru);

            $gambarLama = DB::table('daftarMenu')->where('idMenu', $id)->value('gambar');
            Storage::delete('public/img/' . $gambarLama);

            // Proses update
            DB::table('daftarMenu')->where('idMenu', $id)->update([
                'gambar' => $gambarBaru,
            ]);
        }
        return redirect('/crud')->with(['success' => 'Gambar Berhasil diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fileName = DB::table('daftarMenu')->where('idMenu', $id)->value('gambar');
        Storage::delete('public/img/' . $fileName);
        DB::table('daftarMenu')->where('idMenu', $id)->delete();
        return redirect('/crud')->with(['success' => 'Menu Berhasil dihapus']);
    }
}
