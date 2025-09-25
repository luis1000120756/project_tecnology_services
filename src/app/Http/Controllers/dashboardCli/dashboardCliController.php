<?php

namespace App\Http\Controllers\dashboardCli;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\products\Product as ProductsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardCliController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userName = $user->name;
        session()->forget('productList'); // elimina los valores antiguos
        return view('dashboardCli.homePage.homePage', compact('userName'));
    }

    public function getProducts()
    {
        $products = ProductsProduct::where('category', '!=', 'softwareForSale')->get();
        return view('dashboardCli.productsPage.productPage', compact('products'));
    }

    public function services()
    {
        return view('dashboardCli.servicesPage.servicesPage');
    }

    public function softwareForSale()
    {
        $softwareForSale = ProductsProduct::where('category', 'softwareForSale')->get();
        return view('dashboardCli.softwareForSalePage.softwareForSalePage', compact('softwareForSale'));
    }
}
