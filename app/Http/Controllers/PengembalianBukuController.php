<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanBuku;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PengembalianBukuController extends Controller
{
    public function index()
    {
        // Ambil hanya yang statusnya 'dipinjam'
        $peminjaman = PeminjamanBuku::with(['buku', 'user'])
            ->where('status', 'dipinjam')
            ->latest()
            ->get();

        return view('admin.pengembalian.index', compact('peminjaman'));
    }

    public function create(PeminjamanBuku $peminjaman)
    {
        return view('admin.pengembalian.create', compact('peminjaman'));
    }

    public function store(Request $request, PeminjamanBuku $peminjaman)
    {
        $request->validate([
            'tanggal_kembali' => 'required|date',
        ]);

        $peminjaman->update([
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 'dikembalikan'
        ]);

        // Jika ingin menambah stok buku otomatis:
        $peminjaman->buku->increment('stok', 1);

        return redirect()->route('pengembalian.index')
            ->with('success', 'Buku berhasil dikembalikan.');
    }
}
