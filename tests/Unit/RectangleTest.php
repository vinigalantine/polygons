<?php

namespace Tests\Unit;

use App\Rectangle;
use Tests\TestCase;

class RectangleTest extends TestCase
{
    public function test_create_rectangle() {

        $data = [
            'sideA' => $this->faker->numberBetween(1,100),
            'sideB' => $this->faker->numberBetween(1,100)
        ];

        $this->post(route('rectangles.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_update_rectangle() {

        $rectangle = factory(Rectangle::class)->create();

        $data = [
            'sideA' => $this->faker->numberBetween(1,100),
            'sideB' => $this->faker->numberBetween(1,100)
        ];

        $this->put(route('rectangles.update', $rectangle->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_show_rectangle() {

        $rectangle = factory(Rectangle::class)->create();

        $this->get(route('rectangles.show', $rectangle->id))
            ->assertStatus(200);
    }

    public function test_delete_rectangle() {

        $rectangle = factory(Rectangle::class)->create();

        $this->delete(route('rectangles.delete', $rectangle->id))
            ->assertStatus(204);
    }
}
