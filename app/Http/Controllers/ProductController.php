<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Function Read table product
    public function productread(Request $request){

        $data = Product::paginate(5); //produk yang dibagi paginasi 5 per halaman
        //mengembalikan tamplan tabel ke halaman produk
        return view('product/products', compact('data')); //compact untuk membuat array berisi variable agar bisa diguunakan di views
    }

    //Function display Create Page
    public function insertproduct(){
        return view('product/insert-products'); //->with('') for comment
    }

    //function insert product
    public function createproduct(Request $request){
        
        $data = Product::create($request->all());
        // jika ada request file dengan nama url_image
        if($request->hasFile('image')){
            $request->file('image')->move('img/productimg/',   /*memindahkan file tsb ke folder yg dituju*/
            $request->file('image')->getClientOriginalName());  /*ambil nama file dengan nama original*/
            $data->image = $request->file('image')->getClientOriginalName(); /*run task untuk upload image*/
            $data->save();  /*save task*/
        }
        return redirect()->route('product'); //->with('') for comment
    }

    //Function search product
    public function searchproduct(Request $request) {
        $query = $request->input('query');
    
        // Lakukan pencarian data berdasarkan query
        $data = Product::where('name', 'like', '%' . $query . '%') //mencari query dari nama
        ->orwhere('category', 'like', '%' . $query . '%') //mencari query dari kategori
        ->orwhere('id', 'like', '%' . $query . '%') //mencari query dari Id
        ->paginate(5);
        
        //mengembalikan pencarian ke halaman produk
        return view('product/products', compact('data'));
    }

    //Function display Edit Page
    public function editproduct($id) {
        
        $data = Product::find($id); //menampil form data update berdasarkan id
        return view('product/edit-products', compact('data'));
    }

    //Function Update product
    public function updateproduct(Request $request, $id){
        $data = Product::find($id);
        $data->update($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('img/productimg/',    /*memindahkan file tsb ke folder yg dituju*/
            $request->file('image')->getClientOriginalName());  /*ambil nama file dengan nama original*/
            $data->image = $request->file('image')->getClientOriginalName(); /*run task untuk upload image*/
            $data->save();  /*save task*/
        }

        return redirect()->route('product'); //->with('') for comment
    }

    public function deleteproduct($id){
        $data = Product::find($id); //ambil data yg akan dihapus berdasarkan id
        $data->delete(); //delete action

        return redirect()->route('product');
    }
}