<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
     //kasih tau nama tabel
     protected $table = 'supplier';
     
        
    public $timestamps = false;
         //yang kedua atribut
         protected $fillable = [
             'suplier_id', 'supplier_name', 'supplier_address'
         ];
}
