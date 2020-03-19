<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = "currencies";
    public $primaryKey  = 'Cur_Id';

    public $timestamps = false;

    protected $fillable = [
        'Cur_Id',
        'Cur_ISO',
        'Cur_Name',
        'Cur_Country'
    ];
}
