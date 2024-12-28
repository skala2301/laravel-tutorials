<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //you can seed your database with seeders and use factories to quickly create many records

        User::factory()->create();
        Job::factory(100)->create();
        Tag::factory(400)->withJobs()->create();
    }
}
