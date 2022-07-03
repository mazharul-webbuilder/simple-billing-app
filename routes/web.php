<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route:: get('/', [HomeController::class, 'index'])->name('home');
Route:: get('/all-customers', [HomeController::class, 'customers'])->name('customers');
Route:: get('/all-products', [HomeController::class, 'products'])->name('products');
Route:: get('/inventory-product', [HomeController::class, 'inventoryProduct'])->name('inventoryProduct');
Route:: post('/inventory-product-add', [HomeController::class, 'addProductInInvetory'])->name('addProductInInvetory');
Route:: get('/make-new-inventory', [HomeController::class, 'newInventory'])->name('newInventory');
