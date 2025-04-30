<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Periksa;
use Illuminate\Support\Facades\Auth;
use App\Models\Dokter;
use App\Models\RiwayatPeriksa;

class PeriksaController extends Controller
{
    public function index()
{
    $dokter = Dokter::all(); // ambil semua data dokter
    $riwayat = RiwayatPeriksa::with('dokter')->get(); // ambil riwayat dengan relasi dokter (jika ada)

    return view('periksa.index', compact('dokter', 'riwayat'));
}

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|exists:users,id',
        ]);

        Periksa::create([
            'id_pasien' => Auth::id(),
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => null,
            'catatan' => '',
            'biaya_periksa' => null,
        ]);

        return redirect()->route('periksa.index')->with('success', 'Berhasil mendaftar periksa');
    }
}