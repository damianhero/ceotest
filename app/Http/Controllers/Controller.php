<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Categoria;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function mainCategorias(){
        $mainCategorias = Categoria::where(['parent_id' => 0])->get();
        //$mainCategorias = json_decode(json_encode($mainCategorias));
        //echo "<pre>"; print_r($mainCategorias);
        return $mainCategorias;
    }
}
