<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
       $this->call(UserSeeder::class);
       $this->call(CategorySeeder::class);
       $this->call(PostSeeder::class);
       $this->call(TagSeeder::class);
       $this->call(PostTagSeeder::class);
    }
}
