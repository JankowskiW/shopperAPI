<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentContent extends Model
{
    protected $table = "documentContents";
    public $primaryKey  = 'DcC_Id';

    public $timestamps = false;

    protected $fillable = [
        'DcC_Id',
        'DcC_DcHId',
        'DcC_PrdId',
        'DcC_LotId',
        'DcC_CurId',
        'DcC_ProductDesignation',
        'DcC_UnitPrice',
        'DcC_ProductAmount',
        'DcC_ProductDemand',
        'DcC_ProductValue',
        'DcC_TaxRate'
    ];
}
