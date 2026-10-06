<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('medicine.medicine', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gambar = $request->file('image');
        $gambar->move('gambars', $gambar->getClientOriginalName());

        Medicine::create([
            'name' => $request->a,
            'description' => $request->b,
            'price' => $request->c,
            'expired' => $request->d,
            'medicine_image' => $gambar->getClientOriginalName()
        ]);

        return redirect('/obat');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $detail = Medicine::find($id);
            return view('medicine.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $edit = Medicine::find($id);
        return view('medicine.edit', compact('edit'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Medicine::find($id);

        $update->update([
            'name' => $request->a,
            'description' => $request->b ,
            'price' => $request->c,
            'expired' => $request->d
        ]);

        return redirect('/obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medicine::find($id)->delete();
        return redirect('/obat');
    }
}
