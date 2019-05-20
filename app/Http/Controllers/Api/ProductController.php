<?php

namespace App\Http\Controllers\Api;

use DB;
use App\Product;
use App\ProductImage;
use App\ProductCategories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')
            ->join('product_images', 'products.id', '=', 'product_images.product_id')
            ->select('product_name', 'price', 'description', 'image_name')
            ->get();
        // return $product;
        foreach ($product as $key => $new) {
            $data[$key] = [
                'image' => $new->image_name,
                'product' => $new->product_name,
                'price' => $new->price,
                'desc' => $new->description,
                'quantity' => 0,
            ];
        }
        return $data;
        
        // $product = DB::table('product_category_details')
        //     ->join('products', 'product_category_details.product_id', '=', 'products.id')
        //     ->join('product_categories', 'product_category_details.category_id', '=', 'product_categories.id')
        //     ->select('products.id', 'products.product_name', 'products.description', 'product_categories.category_name')
        //     ->get();
        // return $product;
        // return view('auth-admin.product.index', compact('product'));
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
        DB::table('product_category_details')->insert(
            ['product_id' => $id_product, 'category_id' => $request->id_category, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        );

        $this->validate($request, [
                'gambar' => 'required',
                'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('gambar'))
         {
            $no = 1;
            foreach($request->file('gambar') as $image)
            {
                $tambah = new ProductImage();
                // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
                $file       = $image;
                $fileName   = $no++."-".time().".".$file->getClientOriginalExtension();
                $profile_image_url = 'profile_images/produk/' . $fileName;
                $image->move('profile_images/produk/', $fileName);
                $tambah->product_id = $id_product;
                $tambah->image_name = $profile_image_url;
                $tambah->save();

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
            ->select('product_categories.category_name')
            ->where('product_category_details.product_id', $id)
            ->join('product_categories', 'product_category_details.category_id', '=', 'product_categories.id')
            ->first();
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

        $id_product = $product->id;
        DB::table('product_category_details')->where('product_id', $id)->update([
            'product_id' => $id_product,
            'category_id' => $request->id_category,
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        $this->validate($request, [
                'gambar' => 'required',
                'gambar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        // if($request->hasfile('gambar'))
        //  {
        //     Flight::where('active', 0)->delete();
        //     $no = 1;
        //     foreach($request->file('gambar') as $image)
        //     {
        //         $tambah = new ProductImage();
        //         // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        //         $file = $image;
        //         $fileNames = $file->getClientOriginalName();
        //         $fileName = pathinfo($fileNames, PATHINFO_FILENAME);
        //         $profile_image_url = 'profile_images/produk/' . $fileName;
        //         $image->move('profile_images/produk/', $fileName);
        //         $tambah->product_id = $id_product;
        //         $tambah->image_name = $profile_image_url;
        //         $tambah->save();
        //     }

        //  }
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
        DB::table('product_images')->where('product_id', '=', $id)->delete();
        Product::find($id)->delete();
        return redirect()->route('product.index');
    }

    public function gambar()
    {
        return view('auth-admin.product.gambar');
    }

    public function gambarUpload(Request $request)
    {
        $imageName = request()->file->getClientOriginalName();
        request()->file->move(public_path('upload'), $imageName);
        return response()->json(['uploaded' => '/upload/'.$imageName]);
        return redirect()->route('product.index');
    }
}
