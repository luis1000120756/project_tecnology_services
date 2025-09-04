<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function getProducts()
    {
        $products = Product::all();
        return view('dashboardCli.productsPage.productPage', compact('products'));
    }

    // Guardar un producto con varias imágenes
    public function createProduct(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'imagesPath.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePaths = [];

        if ($request->hasFile('imagesPath')) {
            foreach ($request->file('imagesPath') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
        }

        $product = Product::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => $imagePaths, // se guarda como JSON
        ]);
        return redirect()->back()->with('productNew', $product);
    }
}
