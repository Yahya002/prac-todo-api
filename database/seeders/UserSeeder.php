<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()
            ->count(50)
            ->hasToDo(5)
            ->create();

        User::factory()
            ->count(20)
            ->hasToDo(8)
            ->create();
        
        User::factory()
            ->count(15)
            ->hasToDo(12)
            ->create();
    }
}
