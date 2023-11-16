<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\categorie;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        // Product::create([
        //     'name'=>'product1',
        //     'price'=>'19928',
        //     'description'=>'description',
        //     'serial_number'=>3,
        //     'category_id'=>1,

        // ]);
        $products = Product::all();
        // dd($products);
        return  view('product.index',compact('products'));
    }

    
    public function create(){
        $category=categorie::all();
        return view('product.create',compact('category'));
    }
    
    public function store(StoreProductRequest $request){
        
        $name=request('name');// فيني اعمل هيك اذا مابدي مرر برامتر الريكويست 
        $price=$request->price;
        $description=request('description');
        $serial_number=request('serial_number');
        $category_id=$request->category_id;

        Product::create([
            'name'=>$name,
            'price'=>$price,
            'description'=>$description,
            'serial_number'=>$serial_number,
            'category_id'=>$category_id,
        ]);
        return redirect('product/index')->with('success','created successfully!');
        
    }
    
    public function delete($id){
        $productId=Product::findorfail($id);
        $productId->delete();
        return redirect('/product/index')->with('success','deleted successfully!');
    }


    public function edit($id){
        $product=Product::findorfail($id);
        $category=categorie::all();
        // $info=Product::find($id)->product;
      return view('product.edit',compact('product','category'));
       
}


    public function update(StoreProductRequest $request,$id){
        $product=Product::findorfail($id);
        $product->update([
            'name' => $request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'serial_number'=> $request->serial_number,
            'category_id'=>$request->category_id,
        ]);;
        return  redirect()->route('product.index')->with('success','updeted successfully!');
    }

    


    // public function info(){
    //     // $c=Product::find(12)->product;
    //     // $category=categorie::find(1)->category;
    //     // return $category;

    // }
}
