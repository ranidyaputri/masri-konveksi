<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;
    protected $table = 'katalog';
    
    function detailKatalog()  {
        return $this->hasMany(DetailKatalog::class, 'id', 'id_katalog');
    }
}
