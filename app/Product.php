<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $primaryKey  = 'Prd_Id';

    public $timestamps = false;

    protected $fillable = [
        'Prd_Id',
        'Prd_BatchDeterm',
        'Prd_EAN',
        'Prd_SKU',
        'Prd_Name',
        'Prd_Description',
        'Prd_Amount',
        'Prd_MarketAmount'
    ];
}
