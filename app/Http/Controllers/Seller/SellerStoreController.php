<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class SellerStoreController extends Controller
{
    public function index(){
        return view('seller.store.create');
    }

    public function manage(){
        // 03/05 add below 2.5 line
        $userid = Auth::user()->id;
        $stores = Store::where('user_id', $userid)->get();
        return view('seller.store.manage', compact('stores'));
    }

    public function store(Request $request){
        $validate_data = $request->validate([
            'store_name'=> 'unique:stores|max:100|min:3',
            'slug'=> 'required|unique:stores',
            'details'=> 'required',
        ]);
 
        Store::create([
            'store_name'=>$request->store_name,
            'slug'=>$request->slug,
            'details'=>$request->details,
            'user_id'=>Auth::user()->id, // ✅ Correct usage of Auth

        ]);
        
        return redirect()->back()->with('message', 'Store Created Successfully');
    }
}


