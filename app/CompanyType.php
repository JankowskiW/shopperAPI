<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    protected $table = "companyTypes";
    public $primaryKey  = 'CpT_Id';

    public $timestamps = false;

    protected $fillable = [
        'CpT_Id',
        'CpT_Name'
    ];
}
