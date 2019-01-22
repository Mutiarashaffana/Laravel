<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //kasih tau nama tabel
    protected $table = 'customer';


    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    //yang kedua atribut
    protected $fillable = [
        'customer_id', 'name', 'address'
    ];
}
