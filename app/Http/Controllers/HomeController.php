<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
 

class HomeController extends Controller
{
    public function index($category_slug = null) {
       
        $categories = Category::all();
       
        if ($category_slug ==null){
     
           
       
            $products = Products::all();
      
        }else{
         $category = Category::with('products')->where('slug', $category_slug)->first(); 
         $products = $category->products;
        
     
        }
   return view('front.home' , compact('categories', 'products'));
    }
}
