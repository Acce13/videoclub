<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    protected $table = 'rentals';
    protected $fillable = [
        'customer_id',
        'movie_id',
        'total_value',
        'start_date',
        'end_date'
    ];
}
