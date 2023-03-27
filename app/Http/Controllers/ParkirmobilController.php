<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Parkirmobil;


class ParkirmobilController extends Controller
{
    public function simpanData(Request $request)
    {
        $validatedData = $request->validate([
            'pilihan' => 'required|max:255',
            'Nplat' => 'required|max:255',
            'lantai' => 'required|max:255',
            'nomerlantai' => 'required|max:255',
        ]);

        Parkirmobil::create([
            'pilihan' => $validatedData['pilihan'],
            'Nplat' => $validatedData['Nplat'],
            'lantai' => $validatedData['lantai'],
            'nomerlantai' => $validatedData['nomerlantai'],
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}
