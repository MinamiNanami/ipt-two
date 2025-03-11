<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blotter extends Model
{
    use HasFactory;

    protected $table = 'blotters'; // Ensure correct table name
    protected $fillable = ['case_number', 'name', 'incident', 'date', 'status'];
    public $timestamps = true; // Set to false if no timestamps

    public static function createBlotter($data)
    {
        return static::create($data);
    }
}
