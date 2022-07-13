<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;

class CategorieController extends Controller
{
    public function index(){
        $categories=Category::select('name as title','image')->get();
        return response()->json($categories);
    }
}
