<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
       $categories = Category::select('id','title','slug','parent_categories_id')->where('show',1)->get();
    
        return view('user.home',compact('categories'));
    }
}