<?php

namespace App\Http\Controllers\Admin;

use DB;
use File;
use App\Product;
use App\ProductImage;
use App\ProductCategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
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

        // $product = DB::table('products')
        //     ->join('product_images', 'products.id', '=', 'product_images.product_id')
        //     ->select('product_name', 'price', 'description', 'image_name')
        //     ->get();
        // foreach ($product as $key => $new) {
        //     $data[$key] = [
        //         'product_name' => $new->product_name,
        //         'description' => $new->description,
        //         'quantity' => 0,
        //     ];
        // }
        // return $data;
        
        $product = Product::all();
        return view('auth-admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = ProductCategories::all();
        return view('auth-admin.product.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->weight = $request->weight;
        $product->save();

        $id_product = $product->id;
        $loop = $request->get('category_id');
        foreach ($loop as $value){
            DB::table('product_category_details')->insert(
                ['product_id' => $id_product, 'category_id' => $value, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
            );
        }

        $this->validate($request, [
                'image_name' => 'required',
                'image_name.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('image_name'))
         {
            $i = 1;
            foreach($request->file('image_name') as $image)
            {
                $tambah = new ProductImage();
                $file       = $image;
                $fileName   = $i.time().".".$file->getClientOriginalExtension();
                $image->move('images/product/', $fileName);
                $tambah->product_id = $id_product;
                $profile_image_url = 'images/product/' . $fileName;
                $tambah->image_name = $profile_image_url;
                $tambah->save();
                $i += 1;
            }

         }
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        // $product_category_details = App\ProductCategoryDetail::where('product_id', $id)->first();
        $product_images = ProductImage::where('product_id', $id)->get();
        $product_category_details = DB::table('product_category_details')
            ->where('product_category_details.product_id', $id)
            ->join('product_categories', 'product_category_details.category_id', '=', 'product_categories.id')
            ->select('product_categories.category_name')
            ->get();
        return view('auth-admin.product.show', compact('product','product_category_details','product_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        // $product_category_details = App\ProductCategoryDetail::where('product_id', $id)->first();
        $product_images = ProductImage::where('product_id', $id)->get();
        $product_category_details = DB::table('product_category_details')
            ->select('product_categories.category_name')
            ->where('product_category_details.product_id', $id)
            ->join('product_categories', 'product_category_details.category_id', '=', 'product_categories.id')
            ->first();
        $kategori = ProductCategories::all();
        return view('auth-admin.product.edit', compact('product','product_category_details','product_images', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        Product::where('id', $id)->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'weight' => $request->weight,
        ]);

        $id_product = $id;
        $loop = $request->get('category_id');
        foreach ($loop as $value){
            DB::table('product_category_details')->where('product_id', $id)->update([
                'product_id' => $id_product,
                'category_id' => $value,
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
        


        $this->validate($request, [
                'image_name' => 'required',
                'image_name.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
         if($request->hasfile('image_name'))
         {
            foreach($request->file('image_name') as $image)
            {
                $tambah = new ProductImage();
                $file       = $image;
                $fileName   = time().".".$file->getClientOriginalExtension();
                $image->move('images/product/', $fileName);
                $tambah->product_id = $id_product;
                $profile_image_url = 'images/product/' . $fileName;
                $tambah->image_name = $profile_image_url;
                $tambah->save();

            }
         }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product_category_details')->where('product_id', '=', $id)->delete();
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }

    public function destroyGambar($id)
    {
        $hapus = ProductImage::where('id', $id)
            ->select('image_name')
            ->get();
        foreach ($hapus as $hps) {
            File::delete($hps);
        }

        $image = ProductImage::find($id);
        $image->delete();
        return redirect()->back();
    }

    public function gambarUpload(Request $request)
    {
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
        return response()->json(['uploaded' => '/upload/'.$imageName]);
        return redirect()->route('product.index');
    }
}
