<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\product; 
use App\Models\Category; 
use Session;
class productController extends Controller
{
    //
    public function create(){
        return view('insertProduct') ->with('categories',Category::all());;
    }


    public function store(){    //step 2 
        $r=request(); //step 3 get data from HTML
        $image=$r->file('product-image');
        $image->move('images',$image->getClientOriginalName());   //images is the location  
        $imageName=$image->getClientOriginalName(); 
        $addCategory=product::create([    //step 3 bind data
            'id'=>$r->ID, //add on 
            'name'=>$r->name, //fullname from HTML
            'description'=>$r->description,
            'categoryID'=>$r->category,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'image'=>$imageName,
            
        ]);
        Session::flash('success',"Product create succesful!");


        return redirect()->route('showProduct');
    }

    public function show(){
        $products=product::all();
        return view('showProduct')->with('products',$products);
    }
    public function delete($id){
        $products=Product::find($id);
        $products->delete();
        return redirect()->route('showProduct');
    }
}

