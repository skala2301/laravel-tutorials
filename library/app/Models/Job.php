<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {

    static function all() : array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => 100000
            ],
            [
                'id' => 2,
                'title' => 'Programer',
                'salary' => 10000
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => 40000
            ],
        ];
    }

    static function find($id) : array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if(! $job) {
            abort(404);
        }
        return $job;
    }
}