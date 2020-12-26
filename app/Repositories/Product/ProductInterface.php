<?php


namespace App\Repositories\Product;


use Illuminate\Http\Request;

interface ProductInterface
{
    public function all();

    public function FindById($id);

    public function save(Request $request );

    public function delete($id);

    public function filtreandsort(Request $request);

}
