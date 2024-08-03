<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $Product = Product::all();
        return view('products.index',compact(['Product']));
    }
    public function create(){
        return view("products.create");
    }
    public function store(Request $request){

            Product::create($request->except(['_token','submit']));
            return redirect(route('product.index'));
    }
    public function edit($id){

        $Product = Product::find($id);
        return view("products.edit",compact(['Product']));
    }
    public function update($id, Request $request){

        $Product = Product::find($id);
        $Product->update($request->except(['_token','submit']));
        return redirect(route('product.index'));
    }
    public function delete($id){

        $Product = Product::find($id);
        $Product->delete();
        return redirect(route('product.index'));
    }
    public function generatePDF()
{
    $products = Product::all();
    $pdf = Pdf::loadView('products.pdf', compact('products'));
    return $pdf->download('laporan-list.pdf');
}
}
