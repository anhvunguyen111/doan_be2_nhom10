<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type_product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type_id)
    {$type_id= $type_id;
        $all_typeProduct= Type_product::all();
    //    $all_product_by_type_id = Product::where('type_id','=', $type_id)->with('type_products')->get();
       $all_product_by_type_id = Product::where('type_id','=', $type_id)->with('type_products')->paginate(9);
       $latest_product_first = Product::where('type_id','=', $type_id)->orderBy('create_date', 'desc')->limit(3)->get();
       $latest_product_last = Product::where('type_id','=', $type_id)->orderBy('create_date', 'desc')->offset(4)->limit(3)->get();
       return view('/shop-grid', compact('all_product_by_type_id','all_typeProduct','type_id','latest_product_first','latest_product_last'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
