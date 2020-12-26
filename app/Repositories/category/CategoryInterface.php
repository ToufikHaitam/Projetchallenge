<?php


namespace App\Repositories\category;


use Illuminate\Http\Request;

interface CategoryInterface
{



    public function all();

    public function FindById($id);

    public function save(Request $request );

    public function delete($id);


}
