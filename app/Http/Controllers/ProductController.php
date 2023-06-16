<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
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
        $dataProduct=Product::all();
        return view('dbadmin.my-store', compact('dataProduct'));
    }

    public function isaura()
    {
        $dataProduct=Product::all();
        return view('home.home', compact('dataProduct'));
    }

    // MENAMPILKAN PRODUK PER KATEGORI
    public function bed()
    {
        $dataProduct=Product::where('cat', 'bed')->get();

        return view('home.category.bed', compact('dataProduct'));
    }
    public function bookcase()
    {
        $dataProduct=Product::where('cat', 'bookcase')->get();

        return view('home.category.bookcase', compact('dataProduct'));
    }
    public function cabinet()
    {
        $dataProduct=Product::where('cat', 'cabinet')->get();

        return view('home.category.cabinet', compact('dataProduct'));
    }
    public function chair()
    {
        $dataProduct=Product::where('cat', 'chair')->get();

        return view('home.category.chair', compact('dataProduct'));
    }
    public function desk()
    {
        $dataProduct=Product::where('cat', 'desk')->get();

        return view('home.category.desk', compact('dataProduct'));
    }
    public function sofa()
    {
        $dataProduct=Product::where('cat', 'sofa')->get();

        return view('home.category.sofa', compact('dataProduct'));
    }
    public function table()
    {
        $dataProduct=Product::where('cat', 'table')->get();

        return view('home.category.table', compact('dataProduct'));
    }
    public function wardrobe()
    {
        $dataProduct=Product::where('cat', 'wardrobe')->get();

        return view('home.category.wardrobe', compact('dataProduct'));
    }


    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dbadmin.tambahProduct");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // $request->validate([
        //     'productCode' => 'required',
        //     'product' => 'required',
        //     'qty' => 'required|numeric',
        //     'perPrice' => 'required|numeric',
        // ]);

        // dd($request->all());

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return view('dbadmin.product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dbadmin.editProd', compact('product')); 
    }

    /**
     * Update the specified resource in storage.     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // $request->validate([
        //     'productCode' => 'required',
        //     'product' => 'required',
        //     'qty' => 'required|numeric',
        //     'perPrice' => 'required|numeric',
        // ]);

        $product->update($request->all());
        
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('succes', 'Product deleted succesfully.');
    }
}
