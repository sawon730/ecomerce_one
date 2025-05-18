<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Store;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
use Illuminate\Http\Request;

class SellerProductController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $authuserid = Auth::id();
        $stores = Store::where('user_id', $authuserid)->get();
        return view('seller.product.create', compact('stores'));
    }
    public function manage(){
        $currentSeller = Auth::id();
        $products = Product::where('seller_id', $currentSeller)->get();
        return view('seller.product.manage', compact('products'));
    }
    public function storeproduct(Request $request){
        $request->validate([
            // add extra element if any issue then remove
            'product_name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'sku' => 'nullable|string|max:100|unique:products,sku',
            'regular_price' => 'required|numeric|min:0',
            'discounted_price' => 'nullable|numeric|min:0|lte:regular_price',
            'tax_rate' => 'nullable|numeric|min:0',
            'stock_quantity' => 'required|integer|min:0',
            // 'stock_status' => 'required|in:in_stock,out_of_stock',
            // 'visibility' => 'required|in:public,private',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            // 'status' => 'required|in:active,inactive',
            // 'seller_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:subcategories,id',
            'store_id' => 'required|exists:stores,id',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
       $product = Product::create([
    'product_name' => $request->product_name,
    'slug' => $request->slug,
    'description' => $request->description,
    'sku' => $request->sku,
    'regular_price' => $request->regular_price,
    'discounted_price' => $request->discounted_price,
    'tax_rate' => $request->tax_rate,
    'stock_quantity' => $request->stock_quantity,
    // 'stock_status' => $request->stock_status,
    // 'visibility' => $request->visibility,
    'meta_title' => $request->meta_title,
    'meta_description' => $request->meta_description,
    // 'status' => $request->status,
    'seller_id' => Auth::id(),
    'category_id' => $request->category_id,
    'subcategory_id' => $request->subcategory_id,
    'store_id' => $request->store_id,
    
        ]);
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('product_images', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'img_path' => $path,
                    'is_primary' => false,
                    
                ]);
               
            }
        }
        return redirect()->back()->with('message', 'Product Added Successfully');
    }
}



// $authuserid Auth::user
// $stores = Store::where('user_id', $authuserid)->get();
// return view('seller.product.create', compact('stores'));


=======
        return view('seller.product.create');
    }
    public function manage(){
        return view('seller.product.manage');
    }
}
>>>>>>> 110997d776896d3591ccdd5dbb17958366d915b4
