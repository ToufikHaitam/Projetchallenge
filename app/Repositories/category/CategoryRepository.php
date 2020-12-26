<?php
namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use App\Repositories\category\CategoryInterface;
use Illuminate\Http\Request;


class CategoryRepository implements CategoryInterface
{


    public function all(){
        return Category::all();
    }

    public function FindById($id)
    {
        return Category::finOrFail($id);
    }

    public function save(Request $request ){

        $category=new Category();
        $category->name=$request->name;
        $category->parent_id=$request->parent_id;

        return $category->save();
    }

    public function delete($id){
        return Category::findOrFail($id)->delete();
    }
}
