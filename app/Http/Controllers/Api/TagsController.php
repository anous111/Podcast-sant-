<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;

class TagsController extends Controller
{
    public function index(){
        $tags=tag::select('name as title','slug')->get();
        return response()->json($tags);
    }
}
