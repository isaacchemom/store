<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model

{
    protected $table='items';
    protected $primaryKey='id';
    protected $fillable = ['name','item_no','quantity','category_id'];



    use HasFactory;


    // Item.php
public function categories()
{
    return $this->belongsTo(categories::class,'id');
}
}
