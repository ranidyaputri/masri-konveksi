<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'deskripsi',
    ];

    function transaction() {
        return $this->hasOne(Transaction::class);
    }
}
