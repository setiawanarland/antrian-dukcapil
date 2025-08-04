<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Persyaratan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Antrian;
use App\Models\Layanan;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardPersyaratanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Antrian::with('layanan')->get();
        return view('dashboard.persyaratan.index', [
            'layanans' => Layanan::with('persyaratan')->orderBy('antrian_id')->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.persyaratan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $layanan = Layanan::find($request->layanan_id);
        $validated = $request->validate([
            'layanan_id' => 'required',
            'persyaratan' => 'required',
        ]);

        $validated['antrian_id'] = $layanan->antrian_id;

        $persyaratan = Persyaratan::create($validated);

        if (!$persyaratan->id) {
            Alert::success('Gagal', 'Gagal Menambahkan Persyaratan baru');
            return redirect('/dashboard/persyaratan');
        }

        Alert::success('Sukses', 'Berhasil Menambahkan Persyaratan baru');
        return redirect('/dashboard/persyaratan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Persyaratan $persyaratan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persyaratan $persyaratan)
    {
        return view('dashboard.persyaratan.edit', [
            'persyaratan' => $persyaratan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persyaratan $persyaratan)
    {
        $rules = [
            'persyaratan'  => 'required',
        ];

        $validated = $request->validate($rules);

        Persyaratan::where('id', $persyaratan->id)
            ->update($validated);

        Alert::success('Berhasil !', 'Berhasil Mengedit Layanan');
        return redirect('/dashboard/persyaratan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persyaratan $persyaratan)
    {
        Persyaratan::destroy($persyaratan->id);
        Alert::success('Berhasil', 'Berhasil Menghapus Persyaratan');
        return redirect('/dashboard/persyaratan');
    }
}
