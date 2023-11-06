<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{  public function index(): View
    {
        $categories = Category::paginate(4);

        return view ('Admin.category')->with('categories', $categories);
    }
    public function showcategory(): View
    {
        $categories = Category::all();

        return view ('home.home',compact('categories'));
    }


public function store (Request $request): RedirectResponse
{
    $input = $request->all();
   Category ::create($input);
    return redirect('view_category')->with('flash_message', ' Category Addedd!');
}


public function update(Request $request, $id)
{
    $category = Category::find($id);

    if (!$category) {
        return abort(404); // Handle category not found.
    }

    $input = $request->all();

    if ($request->hasFile('category_image')) {
        $file = $request->file('category_image');
        $fileName = $file->getClientOriginalName();
        $file->move('images', $fileName);
        $input['category_image'] = $fileName;
    }

    $category->update($input);
    return redirect('view_category')->with('success', ' update done');
}

public function destroy(string $id): RedirectResponse
{
    Category::destroy($id);
    return redirect('view_category')->with('flash_message', 'category deleted!');
}

public function deleteItems(Request $request)
{ if (!empty($itemIds)) {
    // Delete the selected items from the database
    Category::whereIn('id', $itemIds)->delete();
    return redirect('view_category')->with('success', 'Selected items deleted successfully.');
} else {

    return redirect('view_category')->with('success', 'Selected items deleted successfully.');
}
}
public function showProducts($category_name)
{
    $category = Category::where('category_name', $category_name)->first();

    if ($category) {
        // Category with the provided name exists
        $products = Product::where('CategoryID', $category->id)->get();

        return view('home.productcategory', compact('category', 'products'));
    } else {
        // Category with the provided name doesn't exist
        return abort(404); // Or you can handle this in your preferred way
    }
}


}
