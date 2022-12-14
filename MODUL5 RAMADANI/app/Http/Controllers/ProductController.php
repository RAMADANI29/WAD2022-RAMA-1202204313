<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products=Product::orderBy('id', 'desc') ->get();
        $products=Product::all();
        return view('product/ListCar-RAMADANI', compact('products'));
        // return 'test';
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('product.Detail-RAMADANI', compact('products'));
    }

    public function create()
    {
        return view('product.Add-RAMADANI');
    }

    public function store(Request $request)
    {
        $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
        $request->img_path->move(public_path('image'), $imgName);

        $random_id = mt_rand(10,99);

        Product::create([

            'user_id' => $random_id,
            'name' => $request -> mobil,
            'owner' => $request -> nama,
            'brand' => $request -> merk,
            'purchase_date' => $request -> date,
            'description' => $request -> deskripsi,
            'image' => $imgName
        ]);

        return redirect('/Listcar');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.Edit-RAMADANI', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $imgName = $product->img_path;
        if($request->img_path) {
            $imgName = $request->img_path->getClientOriginalName() . '-' . time()
                    . '.' . $request->img_path->extension();
            $request->img_path->move(public_path('image'), $imgName);
        } 

        Product::find($id)->update([
            
            'name' => $request -> mobil,
            'owner' => $request -> nama,
            'brand' => $request -> merk,
            'purchase_date' => $request -> date,
            'description' => $request -> deskripsi,
            'image' => $imgName
        ]);

        return redirect('/Update');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('/Listcar');
    }
}
