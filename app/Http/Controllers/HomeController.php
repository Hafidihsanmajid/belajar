<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function dasboard(){
        return view('dasboard');
    }
    public function index(){
        $data = products::get();
         return view('Index',compact('data'));
    }
    public function create(){
        $data = User::get();
         return view('create',compact('data'));
    }

    public function store(Request $request){
        $validator = validator::make($request->all(),[
            'product_name'=> 'required',
            'category'=> 'required',
            'price'=>'required',
            'discount'=> 'required',
        ]);
        if($validator->fails())return redirect()->back()->withInput()->withErrors($validator);
        
        $data['product_name']       = $request->product_name;
        $data['category']      = $request->category;
        $data['price']   = $request->price;
        $data['discount']   = $request->discount;

        Products::create($data);

        return redirect()->route('index');

    }
    public function edit(Request $request,$id){
        $data = Products::find($id);
        return view('edit',compact('data'));
    }
    public function update (Request $request,$id){
        $validator = validator::make($request->all(),[
            'product_name'=> 'required',
            'category'=> 'required',
            'price'=>'required',
            'discount'=> 'required',
        ]);
        if($validator->fails())return redirect()->back()->withInput()->withErrors($validator);
        
        $data['product_name']       = $request->product_name;
        $data['category']      = $request->category;
        $data['price']      = $request->price;
        $data['discount']      = $request->discount;

        // if($request->password){
        //     $data['password']   = hash::make($request->password);
        // }
        

        products::whereId($id)->update($data);

        return redirect()->route('index');
    }
    public function delete(Request $request,$id){
        $data = Products::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('index');
    }
}
