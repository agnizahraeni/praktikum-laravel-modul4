<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil data kategori dengan pagination 5 data per halaman
        $data_kategori = CategoryProduct::paginate(5);

        // Mengirimkan variabel $kategori ke view pages.category.show
        return view('pages.category.show', [
            'kategori' => $data_kategori,
        ]);
    }

    // Method create, store, show, edit, update, destroy bawaan --resource biarkan tetap ada di bawahnya
}