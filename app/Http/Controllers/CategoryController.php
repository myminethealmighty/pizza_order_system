<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // direct category page
    public function list (){
        return view ('admin.category.list');
    }

    // direct create page
    public function createPage (){
        return view ('admin.category.create');
    }

    // create category
    public function create(Request $request){
        $this->categoryValidationCheck($request);
        $data=$this->requestCategoryData($request);
        Category::create($data);
        return redirect()->route('category#list');
    }

    // validation check
    private function categoryValidationCheck($request){
        Validator::make($request->all(),[
            'categoryName'=>'required|unique:categories,name'
        ])->validate();
    }

    // request category Data
    private function requestCategoryData($request){
        return[
            'name'=>$request->categoryName
        ];
    }
}
