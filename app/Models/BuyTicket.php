<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'train_ticket_id',
        'quantity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainTicket()
    {
        return $this->belongsTo(TrainTicket::class);
    }
}
