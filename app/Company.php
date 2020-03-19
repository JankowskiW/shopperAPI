<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    public $primaryKey  = 'Com_Id';

    public $timestamps = false;

    protected $fillable = [
        'Com_Id',
        'Com_AdrId',
        'Com_CpTId',
        'Com_Name'
    ];
}
