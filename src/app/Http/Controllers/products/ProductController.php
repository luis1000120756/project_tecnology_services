<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Products\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{


    // Guardar un producto con varias imágenes
    public function createProduct(CreateProductRequest $request)
    {

        $imagePaths = [];

        if ($request->hasFile('imagesPath')) {
            foreach ($request->file('imagesPath') as $image) {
                $path = $image->store('products', 'public');
                $imagePaths[] = $path;
            }
        }

        $data = $request->validated();

        $data['image_path'] = $imagePaths;

        $product = Product::create($data);
        return redirect()->back()->with('productNew', $product);
    }

    public function getProductById($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado');
        }
        // dd($product->image_path);
        return view('dashboardCli.productsPage.productDetail', compact('product'));
    }

    public function filterProducts(Request $request)
    {
        $query = Product::query();

        if ($request->category && $request->category !== 'Todas las categorías') {
            $query->where('category', $request->category);
        }
        if ($request->minPrice) {
            $query->where('price', '>=', $request->minPrice);
        }
        if ($request->maxPrice) {
            $query->where('price', '<=', $request->maxPrice);
        }

        $products = $query->get();

        return response()->json($products);
    }

    public function addProductCar($id)
    {
        // Buscar el producto por ID
        $product = Product::find($id);

        if ($product) {
            // Obtener el carrito de la sesión, o inicializarlo vacío
            $productList = session('productList', []);

            // Si el producto ya existe en el carrito, aumentar cantidad
            if (isset($productList[$product->id]) && is_array($productList[$product->id])) {
                $productList[$product->id]['quantity'] += 1;
            } else {
                // Si no existe, agregarlo con cantidad = 1
                $productList[$product->id] = [
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'title' => $product->title,
                ];
            }

            // Guardar el carrito actualizado en la sesión
            session(['productList' => $productList]);

            // Opcional: redirigir de vuelta con mensaje
            return redirect()->back()->with('success', "$product->title agregado al carrito");
        }

        // Si no encuentra el producto, redirigir con error
        return redirect()->back()->with('error', 'Producto no encontrado');
    }
}
