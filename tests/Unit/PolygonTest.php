<?php

namespace Tests\Unit;

use Tests\TestCase;

class PolygonTest extends TestCase
{
    public function test_sum_perimeters()
    {
        $this->get(route('polygons.sum_perimeters'))
            ->assertStatus(200)
            ->assertJsonStructure(['sum_perimeters']);
    }

    public function test_sum_areas()
    {
        $this->get(route('polygons.sum_areas'))
            ->assertStatus(200)
            ->assertJsonStructure(['sum_areas']);
    }
}
