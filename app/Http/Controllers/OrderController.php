<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order = (order::all());

        return $order;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->id ==null)
        {
            $order = new Order;

            $order->date = $request->date;
            $order->place_of_dicpatch = $request->place_of_dicpatch;
            $order->place_of_arrival = $request->place_of_arrival;
            $order->order_status = $request->order_status;
            $order->feedback = $request->feedback;
            $order->workers_id = $request->workers_id;
            $order->dispatchers_id = $request->dispatchers_id;

            $order->save();
            return $order;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
