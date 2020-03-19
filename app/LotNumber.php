<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LotNumber extends Model
{
    protected $table = "lotNumbers";
    public $primaryKey  = 'Lot_Id';

    public $timestamps = false;

    protected $fillable = [
        'Lot_Id',
        'Lot_PrdId',
        'Lot_Number'
    ];
}
