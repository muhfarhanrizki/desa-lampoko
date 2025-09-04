<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PengaduanController extends Controller
{
    // Tampilkan daftar pengaduan
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pengaduan.index', compact('pengaduans'));
    }

    // Tampilkan detail pengaduan
    public function show($slug)
    {
        $pengaduan = Pengaduan::where('slug', $slug)->firstOrFail();
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    // Simpan pengaduan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'telepon' => 'nullable|string|max:20',
            'kategori' => 'required|string|max:100',
            'alamat' => 'nullable|string',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // generate slug dari judul
        $slug = Str::slug($validated['judul']);
        $count = Pengaduan::where('slug', 'like', "$slug%")->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $validated['slug'] = $slug;

        // status default
        $validated['status'] = 'pending';

        // simpan gambar kalau ada
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/pengaduan'), $filename);
            $validated['gambar'] = $filename;
        }

        Pengaduan::create($validated);

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil ditambahkan!');
    }

    // Hapus pengaduan
    public function destroy($slug)
    {
        $pengaduan = Pengaduan::where('slug', $slug)->firstOrFail();

        // hapus file gambar kalau ada
        if ($pengaduan->gambar && file_exists(public_path('uploads/pengaduan/' . $pengaduan->gambar))) {
            unlink(public_path('uploads/pengaduan/' . $pengaduan->gambar));
        }

        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil dihapus!');
    }

    // Update status pengaduan (pending, diproses, ditolak)
        public function updateStatus(Request $request, $slug)
        {
            $pengaduan = Pengaduan::where('slug', $slug)->firstOrFail();

            $request->validate([
                'status' => 'required|in:pending,diproses,ditolak'
            ]);

            $pengaduan->status = $request->status;
            $pengaduan->save();

            return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui!');
        }

}
