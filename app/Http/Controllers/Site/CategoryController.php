<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('site.category.index');
    }


    /**  
     * @param  $slug
     */
    public function show($slug)
    {
        //retornando view com o slug específico:
        return view('site.category.show', ['slug' => $slug]);
    }
}