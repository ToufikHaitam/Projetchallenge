<?php


namespace App\Services\Product;


use App\Models\Category;
use App\Models\Product;
use App\Repositories\Product\ProductInterface;
use Illuminate\Http\Request;

class ProductService
{
    private $product;
    public function __construct(ProductInterface  $product)
    {
        $this->product=$product;
    }

    public function all()
    {
        return $this->product->all();
    }

    public function FindById($id)
    {
        return $this->product->FindById($id);
    }

    public function save(Request $request)
    {
        return $this->product->save($request);

    }

    public function delete($id)
    {
        $this->product->delete($id);
    }

    public function filtreandsort(Request $request){
        return $this->product->filtreandsort($request);
         }








}
