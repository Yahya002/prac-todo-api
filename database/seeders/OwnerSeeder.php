<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Owner;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Owner::factory()
            ->count(50)
            ->hasToDo(5)
            ->create();

        Owner::factory()
            ->count(20)
            ->hasToDo(8)
            ->create();
        
        Owner::factory()
            ->count(15)
            ->hasToDo(12)
            ->create();
    }
}
