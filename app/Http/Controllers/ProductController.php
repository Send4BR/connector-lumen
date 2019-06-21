<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Products;

class ProductController extends Controller
{
   public function getAllVariants(Request $request, $id)
   {
      $sku = $request->has('product_sku') ? $request->product_sku : null;

      if (!$id || !$sku) {
         return abort(404);
      } else {
         return response()->json(([
            "success" => true,
            "data" => Products::variants,
         ]), 200);
      }
   }
}
