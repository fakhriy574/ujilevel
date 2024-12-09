<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $category = Category::get();
        return view('category.index', compact('category'));
    }
    public function tambah()
    {
        return view('category.tambah');
    }
    public function aksi_tambah(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $data = [
            'title' => $request->title,
        ];
        Category::insert($data);
        return redirect()->route('category');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Mengambil data layanan berdasarkan ID
        return view('category.edit', compact('category')); // Mengirim data layanan ke view edit
    }

    // Memperbarui data layanan di database
    public function aksi_edit(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id); // Mengambil data service berdasarkan ID
        $category->update([ // Memperbarui data service
            'title' => $request->title,
        ]);

        return redirect()->route('category')->with('success', 'Kategori  berhasil diperbarui!');
    }
    public function aksi_hapus($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('category')->with('success', 'Category berhasil dihapus!');
        }
}
