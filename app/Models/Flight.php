<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'my_flights'; // Nama tabel di database
    protected $primaryKey = 'flight_id'; // Primary key tabel
    public $incrementing = false; // Primary key tidak auto increment
    protected $keyType = 'string'; // Primary key bertipe string
    public $timestamps = false; // Tidak menggunakan timestamps otomatis

    protected $fillable = ['flight_id', 'airline']; // Kolom yang bisa diisi secara massal

    /**
     * Relasi: Flight memiliki banyak Passenger.
     */
    public function passengers()
    {
        return $this->hasMany(Passenger::class, 'flight_id'); // Relasi ke model Passenger
    }
}