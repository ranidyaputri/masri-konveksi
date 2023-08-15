<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'total_bayar',
        'tipe_bayar',
        'status',
    ];

    function transaction() {
        return $this->belongsTo(Order::class);
    }
}
