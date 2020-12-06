<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function index(Request $request) {
        $category = Category::findOrFail($request->id);

        if($category->slug !== $request->nameCategory) abort(404);

        $category = $category;

        return view('admin.product.all_product_category', compact('category'));
    }
}