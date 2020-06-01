<?php

namespace App\Http\Controllers;

use App\Rectangle;

use Illuminate\Http\Request;
use App\Http\Requests\Rectangle as RectangleRequest;

class RectangleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rectangle = Rectangle::create($request->all());
        return response()->json($rectangle, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rectangle  $rectangle
     * @return \Illuminate\Http\Response
     */
    public function show(Rectangle $rectangle)
    {
        return $rectangle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rectangle  $rectangle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rectangle $rectangle)
    {
        $rectangle->update($request->all());
        return response()->json($rectangle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rectangle  $rectangle
     * @return \Illuminate\Http\Response
     */
    public function delete(Rectangle $rectangle)
    {
        $rectangle->delete();
        return response()->json(null, 204);
    }
}
