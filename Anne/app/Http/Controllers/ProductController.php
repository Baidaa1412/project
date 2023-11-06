<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use App\Models\Review;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function index(): View
    {
        $products =Product::paginate(4);
        return view ('Admin.product', compact('products'));
    }
    public function Pagedetail($id)
    {
        $products = Product::find($id);
        $reviews = $products->reviews;
        return view('home.details', compact('products','reviews'));


    }

public function store(Request $request)
{
    $input = $request->all();
  Product ::create($input);
    return redirect('product')->with('flash_message', ' Product Addedd!');}

public function update(Request $request, $id)
{
    $product = Product::find($id);

    if (!$product) {
        return abort(404); // Handle category not found.
    }

    $input = $request->all();

    if ($request->hasFile('ImageURL')) {
        $file = $request->file('ImageURL');
        $fileName = $file->getClientOriginalName();
        $file->move('images', $fileName);
        $input['ImageURL'] = $fileName;
    }

    $product->update($input);
    return redirect('product')->with('success', ' update done');
}

public function destroy(string $id): RedirectResponse
{
    product::destroy($id);
    return redirect('product')->with('flash_message', 'Product deleted!');
}
public function showcategor()
{
    $categories = Category::all();
    return view('Admin.product', compact('categories'));
}
}








