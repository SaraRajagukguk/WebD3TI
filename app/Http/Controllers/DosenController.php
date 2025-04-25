<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function indexPublic()
    {
        $dosens = Dosen::all();
        return view('teacher', compact('dosens')); // Modifikasi view
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('admin.dosens.index', compact('dosens')); // Modifikasi view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dosens.create'); // Modifikasi view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $dosen = new Dosen();
        $dosen->name = $request->name;
        $dosen->jabatan = $request->jabatan;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('gambar-dosen', 'public');
            $dosen->gambar = $gambarPath;
        }

        $dosen->instagram = $request->instagram;
        $dosen->facebook = $request->facebook;
        $dosen->linkedin = $request->linkedin;
        $dosen->save();

        return redirect()->route('admin.dosens.index')->with('success', 'Data dosen berhasil ditambahkan.'); // Modifikasi route name
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        return view('admin.dosens.show', compact('dosen')); // Modifikasi view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('admin.dosens.edit', compact('dosen')); // Modifikasi view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'name' => 'required',
            'jabatan' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        $dosen->name = $request->name;
        $dosen->jabatan = $request->jabatan;

        if ($request->hasFile('gambar')) {
            if ($dosen->gambar) {
                Storage::disk('public')->delete($dosen->gambar);
            }
            $gambarPath = $request->file('gambar')->store('gambar-dosen', 'public');
            $dosen->gambar = $gambarPath;
        }

        $dosen->instagram = $request->instagram;
        $dosen->facebook = $request->facebook;
        $dosen->linkedin = $request->linkedin;
        $dosen->save();

        return redirect()->route('admin.dosens.index')->with('success', 'Data dosen berhasil diperbarui.'); // Modifikasi route name
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        if ($dosen->gambar) {
            Storage::disk('public')->delete($dosen->gambar);
        }

        $dosen->delete();
        return redirect()->route('admin.dosens.index')->with('success', 'Data dosen berhasil dihapus.'); // Modifikasi route name
    }
}