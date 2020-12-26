<?php

namespace App\Http\Controllers;

use App\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $service;
    public function __construct(ProductService $service)
    {
        $this->service=$service;
    }

    public function index(){
        return  $this->service->all();
    }
    public function finding($id){
        return $this->service->FindById($id);
    }
    public  function deleting($id){
        return $this->service->delete(id);
    }

    public function filtrated(Request $request){
           return $this->service->filtreandsort($request);
    }

    public function save(Request  $request ){
        return $this->service->save($request);
    }





}
