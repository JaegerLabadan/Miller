<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorListAlltimeModel extends Model
{
    protected $table = 'vendor_list_alltime_tbl';
    public $primaryKey = 'vendor_id';
    protected $fillables = [
        'company_name',
        'product_specification',
        'number_of_joined_events'
    ];
}
