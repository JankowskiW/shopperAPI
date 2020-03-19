<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loyality extends Model
{
    protected $table = "loyality";
    public $primaryKey  = 'Loy_Id';

    public $timestamps = false;

    protected $fillable = [
        'Loy_Id',
        'Loy_PrsId',
        'Loy_ComId',
        'Loy_Balance',
        'Loy_JoinDate',
        'Loy_ExpiryDate',
        'Loy_Expired'
    ];
}
