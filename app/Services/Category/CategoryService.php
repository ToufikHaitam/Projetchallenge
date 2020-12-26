<?php


namespace App\Services\Category;


use App\Repositories\category\CategoryInterface;

class CategoryService

{
    private $category;
    public function __construct(CategoryInterface $category)
    {
        $this->category=$category;
    }

    public  function  all(){

        $this->category->all();
    }


}
