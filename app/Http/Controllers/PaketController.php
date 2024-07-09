<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Paket::all();
        return view('admin.paket',compact('data'));
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
        if ($request->hasFile('foto')) {
            $gambarPath = $request->file('foto')->store('', 'public'); 
            $gambar = $gambarPath;
        } else {
            $gambar = null;
        }

        $data = Paket::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $gambar
        ]);

        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Sukses Memasukkan Data',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal menyimpan data',
            ]);
        }
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
        $data = Paket::findOrFail($id);
        return response()->json(['data' => $data], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->paket_id;
        $data = Paket::find($id);

        if (!$data) {
            return response()->json([
                'status' => false,
                'message' => 'Data Paket tidak ditemukan',
            ]);
        }
         
        $data->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi
        ]);

        if ($request->hasFile('foto')) {
            $gambarPath = $request->file('foto')->store('', 'public'); 
            $foto = $gambarPath;
            $data->update([
                'foto' => $foto
            ]);
        }

        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Sukses Mengubah Data',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal Mengubah data',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Paket::find($id);

        if (empty($data)) {
            return response()->json([
                'status' => false,
                'message' => 'Data gagal ditemukan'
            ], 404);
        }

        $data->delete();

        return response()->json([
            'status' => true,
            'message' => 'Sukses Melakukan delete Data',
        ]);
    }
}
