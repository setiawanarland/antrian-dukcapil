<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function persyaratan()
    {
        $persyaratan = ['KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah'];
        return view('/home/persyaratan', [
            'persyaratan' => $persyaratan,
        ]);
    }

    public function formulir()
    {
        $formulir = ['KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah', 'KTP', 'KK', 'Akta', 'Surat Pindah'];
        return view('/home/formulir', [
            'formulir' => $formulir,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Landing $landing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Landing $landing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
