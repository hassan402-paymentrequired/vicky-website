<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $rooms = [
            ['name' => 'Bedroom', 'price' => 2000],
            ['name' => 'Living Room', 'price' => 1500],
            ['name' => 'Bathroom', 'price' => 1000],
            ['name' => 'Kitchen', 'price' => 1200],
            ['name' => 'Balcony', 'price' => 800],
            ['name' => 'Store', 'price' => 700],
        ];

        array_map(fn($room) => Room::create($room), $rooms);
    }
}
