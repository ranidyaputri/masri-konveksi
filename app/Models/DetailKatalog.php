<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKatalog extends Model
{
    use HasFactory;
    protected $table = 'detailkatalog';
    
    function katalog()  {
        return $this->belongsTo(Katalog::class);
    }
}
