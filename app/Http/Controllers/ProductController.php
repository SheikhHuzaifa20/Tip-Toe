<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

	public function add_product()
    {

		return view('crud.addproduct');

	}

    public function view_product()
    {

        $product = DB::table('products')->get();

        return view('crud.view_product' , ['products' => $product]);

	}

    public function store_product(Request $request)
    {
    $validated = $request->validate([
        'product_title' => 'required|string|max:255',
        'feature_product' => 'required|string',
        'categery' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'required|string|max:255',
        'image' => 'required|mimes:jpeg,png,jpg,gif,webp',
    ]);


    $product = new Product();
    $product->product_title = $request->input('product_title');
    $product->feature_product = $request->input('feature_product');
    $product->categery = $request->input('categery');
    $product->price = $request->input('price');
    $product->description = $request->input('description');

    // if ($request->hasFile('image')) {
    //     $image = $request->file('image');
    // }

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('uploads/product/');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }


        $image->move($destinationPath, $imageName);


        $product->image = 'uploads/product/' . $imageName;
    }

    $product->save();

        return redirect()->route('view_product')->with('success', 'Data has been saved successfully!');
    }


    public function product_destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('view_product')->with('success', 'Product deleted successfully!');
    }


    public function edit($id)
{
    $product = DB::table('products')->where('id' , $id)->get();

    return view('crud.edit_product', compact('product'));
}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'product_title' => 'required|string|max:255',
        'feature_product' => 'required|string',
        'categery' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'required|string|max:255',
        'image' => 'required|mimes:jpeg,png,jpg,gif,webp',
    ]);


    $product = Product::findOrFail($id);

    if ($request->hasFile('image')) {
        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/products/'), $imageName);
        $product->image = 'uploads/products/' . $imageName;
    }


    $product->product_title = $request->input('product_title');
    $product->feature_product = $request->input('feature_product');
    $product->categery = $request->input('categery');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->save();

    return redirect()->route('view_product', compact('product'))->with('success');
}


public function product_detail($id)
{
    $products = DB::table('products')->where('id', $id)->first();

    return view('product_detail'  , ['products' => $products]);

}



}
