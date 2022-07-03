<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\InventoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function customers()
    {
        return view('customer.customers',[
            'customers' => Customer::orderBy('id', 'desc')->get()
        ]);
    }
    public function products()
    {
        return view('product.products',[
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }
    public function inventoryProduct()
    {
        return view('inventory.inventory-products',[
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }
    public function addProductInInvetory(Request $request)
    {
        InventoryProduct::getNewInventoryInProduct($request);
        return redirect()->back()->with('message', 'New Product Added In Inventory');
    }
    public function newInventory()
    {
        return view('inventory.new-inventory',[
            'products' => Product::orderBy('id', 'desc')->get(),
        ]);
    }
}
