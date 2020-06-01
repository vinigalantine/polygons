<?php

namespace Tests\Unit;

use App\Triangle;
use Tests\TestCase;

class TriangleTest extends TestCase
{
    public function test_create_triangle() {

        $data = [
            'sideA' => $this->faker->numberBetween(1,100),
            'sideB' => $this->faker->numberBetween(1,100),
            'sideC' => $this->faker->numberBetween(1,100)
        ];

        $this->post(route('triangles.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_update_triangle() {

        $triangle = factory(Triangle::class)->create();

        $data = [
            'sideA' => $this->faker->numberBetween(1,100),
            'sideB' => $this->faker->numberBetween(1,100),
            'sideC' => $this->faker->numberBetween(1,100)
        ];

        $this->put(route('triangles.update', $triangle->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_show_triangle() {

        $triangle = factory(Triangle::class)->create();

        $this->get(route('triangles.show', $triangle->id))
            ->assertStatus(200);
    }

    public function test_delete_triangle() {

        $triangle = factory(Triangle::class)->create();

        $this->delete(route('triangles.delete', $triangle->id))
            ->assertStatus(204);
    }
}
