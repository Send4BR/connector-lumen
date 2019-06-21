<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Orders;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
   public function getById(Request $request, $id)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'confirmation' => 'sometimes',
         ]
      );

      if ($validator->fails() || !$id) {
         return abort(404);
      } else {
         return response()->json(([
            "success" => true,
            "data" => Orders::listAllOrders,
         ]), 200);
      }
   }

   public function getStatuses()
   {
      return response()->json(([
         "success" => true,
         "data" => Orders::statuses,
      ]), 200);
   }
}
