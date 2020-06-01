<?php

namespace App\Http\Controllers;

use App\Triangle;
use App\Rectangle;

use Illuminate\Http\Request;

class PolygonController extends Controller
{
    public function sum_perimeters()
    {
        $sum_perimeters = 0;
        $triangles = (new Triangle)->all();
        $rectangles = (new Rectangle)->all();

        foreach($triangles as $triangle){
            $sum_perimeters += $triangle->perimeter();
        }

        foreach($rectangles as $rectangle){
            $sum_perimeters += $rectangle->perimeter();
        }

        return response()->json(['sum_perimeters' => $sum_perimeters],200);
    }

    public function sum_areas()
    {
        $sum_areas = 0;
        $triangles = (new Triangle)->all();
        $rectangles = (new Rectangle)->all();

        foreach($triangles as $triangle){
            $sum_areas += $triangle->area();
        }

        foreach($rectangles as $rectangle){
            $sum_areas += $rectangle->area();
        }

        return response()->json(['sum_areas' => $sum_areas],200);
    }
}
