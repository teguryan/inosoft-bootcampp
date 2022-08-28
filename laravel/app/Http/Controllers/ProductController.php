<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $allProduct = Product::all();
        // dump($allProduct->toArray());
        return view('product',['product' => $allProduct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        // bikin data manual dari controller
            // $newProduct = [
            //     'nama_produk' => 'Sepatu Nike',
            //     'deskripsi' => 'Sepatu Nike ni bos,senggol dong',
            //     'harga' => 100000,
            //     'tipe_produk' => 'sepatu'
            // ];

            // $product = Product::make($newProduct);
            // $product->save();

        // untuk menampilkan data 
            // $formData = $request->all();

        // validate simple ( bawaan laravel validate())
            // $formData = $request->validate([
            //     'nama_produk' => 'required|min:10',
            //     'deskripsi' => 'required',
            //     'harga' => 'required',
            //     'tipe_produk' => 'required',
            // ]);
            // dump($formData);

        /* validate menggunakan php artisan request,
        ada di App\Http\Request\ProductStoreRequest dan mengganti Request menjadi ProductStoreRequest di store() */
            $formData = $request->validated();
            dump($formData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
