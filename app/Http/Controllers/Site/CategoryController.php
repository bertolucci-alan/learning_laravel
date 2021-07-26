<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //retornar uma view
        return view('site.category.index', [
            'categories' => Category::all(),
            'categories_count' => DB::table('categories')->count(),
        ]);
    }


    /**  
     * @param  $slug
     */
    public function show(Category $category)
    {
        // dd($category->load('products'));
        //retornando view com o slug específico:
        return view('site.category.show', ['category' => $category->load('products')]);
    }
}