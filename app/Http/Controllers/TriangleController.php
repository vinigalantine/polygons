<?php

namespace App\Http\Controllers;

use App\Triangle;

use Illuminate\Http\Request;
use App\Http\Requests\Triangle as TriangleRequest;

class TriangleController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TriangleRequest $request)
    {
        $triangle = Triangle::create($request->all());
        return response()->json($triangle, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Triangle  $triangle
     * @return \Illuminate\Http\Response
     */
    public function show(Triangle $triangle)
    {
        return $triangle;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Triangle  $triangle
     * @return \Illuminate\Http\Response
     */
    public function update(TriangleRequest $request, Triangle $triangle)
    {
        $triangle->update($request->all());
        return response()->json($triangle);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Triangle  $triangle
     * @return \Illuminate\Http\Response
     */
    public function delete(Triangle $triangle)
    {
        $triangle->delete();
        return response()->json(null, 204);
    }
}
