<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProdukSayaController extends Controller
{
    public function index(Request $request)
    {
        // Ambil semua kategori
        $category = Category::all();

        // Ambil ID kategori dari parameter URL
        $categoryId = $request->get('category');

        // Filter produk berdasarkan kategori jika parameter kategori ada
        if ($categoryId) {
            $product = Product::where('category_id', $categoryId)->get();
        } else {
            // Jika tidak ada kategori yang dipilih, tampilkan semua produk
            $product = Product::all();
        }

        // Kirim data ke view
        return view('ProdukSaya.index', compact('category', 'product'));
    }
}
