<?php

namespace App\Http\Controllers;
use App\Models\pro;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
   
        
        public function dhome()
        {
         $pro=pro::all();   
         return view('dash/home',['DATA'=>$pro]);
        }
     
        public function shop()
        {
         $pro=pro::all();   
         return view('shop',['pro'=>$pro]);
        }
     
        public function add(Request $req){
         $re= new pro;
         $re->name=$req->name;
         $re->price=$req->price;
        if($req->hasFile('image')){
            $file=$req->file('image');
            $ext=$file->getClientOriginalExtension();
            $fname=time().'.'.$ext;
            $file->move('tem/images/pro',$fname);
            $re->img=$fname;
        }else{
            return $req;
            $re->image="no image found";
        }
         $re->save(); 
         return redirect('dhome');
        }
        public function insert()
        {
         
         return view('dash/insert');
        }
    
}
