<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = DB::select('SELECT o.id, o.name as or_name, p.name as pro_name, o.product_quantity, o.date 
            FROM orders as o, products as p 
            WHERE o.id_products = p.id');
        $size_array = sizeof($order);

        if($request->input('date')){
            $date = str_replace('-','/',$request->input('date'));
            $order = DB::select('SELECT o.id, o.name as or_name, p.name as pro_name, o.product_quantity, o.date 
                                    FROM orders as o, products as p 
                                    WHERE o.id_products = p.id 
                                    AND o.date = :date', ['date' => $date]);
            $size_array = sizeof($order);
        }

        return view("welcome", compact('order', 'size_array'));
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
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $order = null;
        $size_array = null;
        if($request->input('order')){
            $order = DB::select('SELECT p.name, p.available_quantity, o.product_quantity
                                    FROM products as p, orders as o
                                    WHERE p.id = o.id_products
                                    AND o.id = :id', ['id' => $request->input('order')]);
            $size_array = sizeof($order);
        }

        return view("products_order", compact('order', 'size_array'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    // public function listOrdersInventary(Request $request)
    // {
    //     dd('entro');
    //     if($request->input('order')){
    //         $order = DB::select('SELECT p.name, p.available_quantity, o.product_quantity
    //                                 FROM products as p, orders as o
    //                                 WHERE p.id = o.id_products
    //                                 AND o.id = :id', ['id',$request->input('order')]);
    //         $size_array = sizeof($order);
    //     }

    //     return view("products_order", compact('order', 'size_array'));
    // }
}
