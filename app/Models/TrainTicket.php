<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'stasiun_asal',
        'stasiun_tujuan',
        'price',
    ];
}
