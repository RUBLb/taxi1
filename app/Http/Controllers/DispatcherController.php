<?php

namespace App\Http\Controllers;

use App\Models\Dispatcher;
use Illuminate\Http\Request;

class DispatcherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dispatcher = (dispatcher::all());

        return $dispatcher;
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
            $dispatcher = new Dispatcher;

            $dispatcher->name = $request->name;
            $dispatcher->number = $request->number;

            $dispatcher->save();
            return $dispatcher;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispatcher $dispatcher)
    {
        if($request->id ==null)
        {
            $dispatcher = new Dispatcher;

            $dispatcher->name = $request->name;
            $dispatcher->number = $request->number;

            $dispatcher->save();
            
            return true;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispatcher $dispatcher)
    {
        //
    }
}
