<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillabe = [
        'item_code',
        'name',
        'des',
        'pic',
        'buyprice',
        'sellprice',

    ];
    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'item_code');
    }

}
