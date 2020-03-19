<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = "documentTypes";
    public $primaryKey  = 'DcT_Id';

    public $timestamps = false;

    protected $fillable = [
        'DcT_Id',
        'DcT_DocType',
        'DcT_Description',
        'DcT_DocSeries'
    ];

}
