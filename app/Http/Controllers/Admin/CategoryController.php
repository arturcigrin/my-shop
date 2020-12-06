<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\CRUDDirectory;
use App\Models\MattressTopper;
use App\Http\Controllers\Controller;
use App\Http\Requests\{ValidateCreateCategory,ValidateUpdateCategory};

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::select('id','slug','title')->orderBy('id','desc')->whereNull('parent_categories_id')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcategories = Category::select('id','slug','title','parent_categories_id')->orderBy('id','desc')->whereNotNull('parent_categories_id')->get();


        return view('admin.category.create', compact('subcategories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateCreateCategory $request)
    {
         $category = $request->only(['title','show']);
        //  $category['parent_categories_id'] = $request->defaultNull( $category['parent_categories']);
        //  unset($category['parent_categories']);
        // //  dd($category);
        // $category['parent_categories_id'] = $category['parent_categories'];

        // dd($category);

        
        // $folder =  CRUDDirectory::createFolderInCategory($category['title']);
        //  if(!$folder)  {
        //     session()->flash('error', "Папка с именем " . CRUDDirectory::$nameFolderCategory . " cуществует.");
        //     return redirect()->route('categories.create');
        //  }
        //   $pathCategory = CRUDDirectory::getPathCategory();

       
           Category::create($category)->select('id')->get();
         


        session()->flash('success', 'Категория создана');
        return redirect()->route('categories.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if(!$category) return abort(404);
        
        return view('admin.category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidateUpdateCategory $request, $id)
    {

        $category = Category::find($id);
        $category->update($request->only(['title', 'show']));
        $category->save();
        
        session()->flash('success', 'Категория изменена');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)

    {
        $category = Category::find($id);
        if(!$category) return abort(404);
        
        if(count($category->products)) {
        session()->flash('error', 'Вы не можете удалить категорию, т.к. в ней есть товары.');
        return redirect()->route('categories.index');
        }
       $isFile =  CRUDDirectory::deleteFolderInCategory(explode('/',$category->path_category));

       if(!$isFile) {
        session()->flash('error', 'Вы не можете удалить категорию, т.к. в папке есть файлы.');
        return redirect()->route('categories.index');
       }
       
        $category->delete();

        session()->flash('success', 'Категория удалена');
        return redirect()->route('categories.index');
    }
}