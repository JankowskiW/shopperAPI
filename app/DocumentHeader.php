<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentHeader extends Model
{
    protected $table = "documentHeaders";
    public $primaryKey  = 'DcH_Id';

    public $timestamps = false;

    protected $fillable = [
        'DcH_Id',
        'DcH_DcTId',
        'DcH_DocumentIssuer',
        'DcH_Contractor',
        'DcH_RemovalPlace',
        'DcH_DeliveryPlace',
        'DcH_RelatedDocument',
        'DcH_CostRespDept',
        'DcH_DocSeries',
        'DcH_OrdinalNumber',
        'DcH_AdmissionDate'
    ];

}
