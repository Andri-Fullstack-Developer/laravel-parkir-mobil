<?php

namespace App\Http\Controllers;

use App\Models\Parkirmobil;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //untuk menambahkan data dari form
    {
        
        //
        return redirect()->route('welcome')->with('success', 'Data berhasil disimpan.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // Untuk Menambakahkan data dari form ke database
    {
        //
        Parkirmobil::create($request -> all());
        return redirect()-> route('welcome');
    return redirect()->route('welcome')->with('success', 'Data berhasil disimpan.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
