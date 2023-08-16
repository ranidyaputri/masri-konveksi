<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'id_order',
        'total_bayar',
        'tipe_bayar',
        'status',
    ];

    function order() {
        return $this->belongsTo(Order::class, 'id_order', 'id');
    }
}
