<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function my_shop()
    {
        return view('template.shop');
    }
}
