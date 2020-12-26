<?php


namespace App\Repositories\Product;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository implements ProductInterface
{

    public function all()
    {
        return Product::all();
    }

    public function FindById($id)
    {
        return Product::findOrfail($id);
    }

    public function save(Request $request)
    {
        $product = new Product();
        $caterory=Category::findOrfail($request->Category_id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->image=$request->image;
        $product->category()->associate($caterory);
        return $product->save();

    }

    public function delete($id)
    {
        return Product::findOrFail($id)->delete();
    }

    public function filtreandsort(Request $request)
    {
        $products = Product::with('category');

        if ($request->has('sortby')) {
            $products->orderBy($request->sortby, 'DESC');
        }

        if ($request->has('category_id')) {
            $products->whereHas('category')->where('category_id','=',$request->category_id);
        }

        return $products->get();
    }
}
