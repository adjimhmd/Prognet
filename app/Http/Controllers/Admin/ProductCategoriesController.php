<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProductCategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productCategories = ProductCategories::all();
        return view('auth-admin.productCategories.index', compact('productCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth-admin.productCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $mytime = Carbon\Carbon::now();
        // $created_at = $mytime->toDateTimeString();
        // $updated_at = $mytime->toDateTimeString();
        // Anggota::create($request->all());
        $productCategories = new ProductCategories;
        $productCategories->category_name = $request->category_name;
        $productCategories->save();
        return redirect()->route('product_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategories $productCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productCategories = ProductCategories::find($id);
        return view('auth-admin.productCategories.edit', compact('productCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productCategories = ProductCategories::find($id);
        $productCategories->category_name = $request->category_name;
        $productCategories->save();
        return redirect()->route('product_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategories::find($id)->delete();
        return redirect()->route('product_categories.index');
    }
}
