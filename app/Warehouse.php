<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = "warehouses";
    public $primaryKey  = 'Whs_Id';

    public $timestamps = false;

    protected $fillable = [
        'Whs_Id',
        'Whs_Acronym',
        'Whs_Name'
    ];
}
