<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowProductListPageController extends Controller
{
    public function __invoke(Request $request)
    {
        return view("initial.product.list");
    }
}
