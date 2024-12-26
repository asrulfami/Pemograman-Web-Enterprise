<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Flight;

class FlightsTableSeeder extends Seeder
{
    public function run()
    {
        // Hapus semua data sebelum menyisipkan data baru
        DB::table('my_flights')->truncate();

        Flight::create([
            'flight_id' => 'FL456',
            'airline' => 'Demo Airline',
        ]);

        Flight::create([
            'flight_id' => 'FL256',
            'airline' => 'Dummy Airline',
        ]);
    }
}