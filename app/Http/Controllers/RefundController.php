<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\Refunds;
use Illuminate\Support\Facades\Validator;

class RefundController extends Controller
{
   public function newPayment(Request $request)
   {
      $validator = Validator::make(
         $request->all(),
         [
            'customer_id' => 'required',
            'customer_email' => 'required|email',
            'customer_document' => 'required',
            'refund_id' => 'required',
            'refund_amount' => 'required',
            'expire_days' => 'required',
         ]
      );

      if ($validator->fails()) {
         return abort(404);
      } else {
         return response()->json(([
            "success" => true,
            "data" => Refunds::refund,
         ]), 200);
      }
   }
}
