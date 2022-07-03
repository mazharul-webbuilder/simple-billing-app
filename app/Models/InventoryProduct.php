<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProduct extends Model
{
    use HasFactory;
    public static $inventoryProduct;
    public static $discount;

    public static function getNewInventoryInProduct($request)
    {
        self::$inventoryProduct = new InventoryProduct();
        self::$inventoryProduct->productID = $request->productID;
        self::$inventoryProduct->rate      = $request->rate;
        self::$inventoryProduct->qty       = $request->qty;
        self::$discount = $request->discount;
        self::$discount = (self::$discount * $request->rate) / 100;
        self::$inventoryProduct->discount  = self::$discount;
        self::$inventoryProduct->save();
        return self::$inventoryProduct;

    }
}
