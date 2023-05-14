<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    // untuk menampilkan data keseluruhannya
    public function index()
    {
       $plants = Plant::paginate(5);
       return view('plants.index', [
          'data' => $plants
       ]);
    }

    public function show($id)
    {
        $plant = Plant::find($id);
        return $plant;
    }

    // untuk direct viewnya ke formulir create data
    public function create()
    {
        return view('plants.create');
    }

    // logic untuk menyimpan data yang baru dibuat ke db
    public function store(Request $request)
    {
        // validasi kolom wajib diisi
        $request->validate([
            'Nama_Tanaman' => 'required',
            'Asal_Tanaman' => 'required',
            'Deskripsi' => 'required'
           
        ]);

        Plant::create([
            'Nama_Tanaman' => $request->Nama_Tanaman,
            'Asal_Tanaman' => $request->Asal_Tanaman,
            'Deskripsi' => $request->Deskripsi
           
        ]);
        return redirect('/plants');
    }

    // menampilkan view form untuk edit data
    public function edit(Request $request, $id)
    {
        $plant = Plant::find($id);
        return view('plants.edit', compact('plant'));
    }

    // logic mengubah data yang dipilih
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Tanaman' => 'required',
        ]);
        $plant = Plant::find($id);
        $plant -> update([
            'Nama_Tanaman' => $request->Nama_Tanaman,
            'Asal_Tanaman' => $request->Asal_Tanaman,
            'Deskripsi' => $request->Deskripsi
           
        ]);
        return redirect ('/plants');
    }

    // menghapus data
    public function destroy($id)
    {
        $plant = Plant::find($id);
        $plant -> delete();
        return redirect('/plants');
    }
}