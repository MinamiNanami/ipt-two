<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents'; // Ensure correct table name
    protected $fillable = ['name', 'form', 'date'];
    public $timestamps = true; // Set to false if no timestamps

    public static function createDocument($data)
    {
        return static::create($data);
    }
}
