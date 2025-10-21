<?php

namespace App\Http\Controllers\dashboardCli;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\products\Product as ProductsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardCliController extends Controller
{
    public function nameUser()
    {
        return Auth::user()->name;
    }
    public function index()
    {
        $userName = $this->nameUser();
        session()->forget('productList'); // elimina los valores antiguos
        return view('dashboardCli.homePage.homePage', compact('userName'));
    }



    public function getProducts()
    {
        $products = ProductsProduct::where('category', '!=', 'softwareForSale')->get();
        $userName = $this->nameUser();
        return view('dashboardCli.productsPage.productPage', compact(['products', 'userName']));
    }

    public function services()
    {
        $userName = $this->nameUser();
        return view('dashboardCli.servicesPage.servicesPage', compact('userName'));
    }

    public function softwareForSale()
    {
        $softwareForSale = ProductsProduct::where('category', 'softwareForSale')->get();
        $userName = $this->nameUser();
        return view('dashboardCli.softwareForSalePage.softwareForSalePage', compact('softwareForSale', 'userName'));
    }

    public function news()
    {
        $userName = $this->nameUser();
        return view('dashboardCli.newsPage.newsPage', compact('userName'));
    }
}
