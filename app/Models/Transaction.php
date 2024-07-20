<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'invoice', 'status', 'username', 'password', 'voucher_duration', 'payment_proof'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
