<?php

namespace App\Http\Controllers;

use App\Data\Configurations;

class ConfigurationController extends Controller
{
   public function getConfigs()
   {
      return response()->json(([
         "success" => true,
         "data" => Configurations::listAllConfigs,
      ]), 200);
   }
}
