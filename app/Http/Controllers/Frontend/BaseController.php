<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $menus = Category::all();
        $seo = Seo::first();
        View::share([
            'menus' => $menus,
            "seo" => $seo
        ]);
    }
}
