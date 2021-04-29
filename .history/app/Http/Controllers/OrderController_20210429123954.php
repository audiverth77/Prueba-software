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
            die();
            $order = DB::select('SELECT o.id, o.name as or_name, p.name as pro_name, o.product_quantity, o.date 
                                    FROM orders as o, products as p 
                                    WHERE o.id_products = p.id 
                                    AND o.date = :date', ['date' => $date]);
            // echo'<pre>';
            // print_r($order);
            // echo'</pre>';
            // die(0);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
