<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productpagina extends Controller
{
    public function html (){
        return view('product.html');
    }
}
