<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resident extends Model
{
    use HasFactory;

    protected $table = 'residents'; // Ensure correct table name
    protected $fillable = ['resident_id', 'name', 'address', 'contact', 'gender'];
    public $timestamps = true; // Set to false if no timestamps

    public static function createResident($data)
    {
        return static::create($data);
    }
}
