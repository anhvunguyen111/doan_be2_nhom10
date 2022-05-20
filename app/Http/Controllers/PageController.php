<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type_product;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $all_product= Product::all();
        // $sashimi_product= Product::where('type_id','=', 1)->get();
        // $sushi_product= Product::where('type_id','=', 2)->get();
        // $salads_product= Product::where('type_id','=', 3)->get();
        // $monAnKem_product= Product::where('type_id','=', 4)->get();
        // return view($id, compact('all_product', 'sashimi_product', 'sushi_product', 'salads_product','monAnKem_product'));
        $all_typeProduct= Type_product::all();
        $featured_product= Product::where('is_featured','=',1)->with('type_products')->get();
        $latest_product_of_type1 = Product::where('type_id','=', 1)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type2 = Product::where('type_id','=', 2)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type3 = Product::where('type_id','=', 3)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type4 = Product::where('type_id','=', 4)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        return view('/'.$id, compact('all_typeProduct','featured_product', 'latest_product_of_type1','latest_product_of_type2','latest_product_of_type3','latest_product_of_type4'));

    }
    public function home()
    {
        // $all_product= Product::all();
        // $sashimi_product= Product::where('type_id','=', 1)->get();
        // $sushi_product= Product::where('type_id','=', 2)->get();
        // $salads_product= Product::where('type_id','=', 3)->get();
        // $monAnKem_product= Product::where('type_id','=', 4)->get();
        // return view($id, compact('all_product', 'sashimi_product', 'sushi_product', 'salads_product','monAnKem_product'));
        $all_typeProduct= Type_product::all();
        $featured_product= Product::where('is_featured','=',1)->with('type_products')->get();
        $latest_product_of_type1 = Product::where('type_id','=', 1)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type2 = Product::where('type_id','=', 2)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type3 = Product::where('type_id','=', 3)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        $latest_product_of_type4 = Product::where('type_id','=', 4)->with('type_products')->orderBy('create_date', 'desc')->limit(1)->get();
        return view('index', compact('all_typeProduct','featured_product', 'latest_product_of_type1','latest_product_of_type2','latest_product_of_type3','latest_product_of_type4'));

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
