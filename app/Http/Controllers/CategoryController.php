<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private  $service;
    public function __construct(CategoryService  $service)
    {
        $this->service=$service;
    }


    public function index(){
        return $this->service->all();
    }

}
