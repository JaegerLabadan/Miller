<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorListByEventsModel extends Model
{
    protected $table = 'vendor_list_events_tbl';
    public $primaryKey = 'vendor_id';
    protected $fillable = [
        'event_id',
        'company_name',
        'company_logo',
        'product_specs',
        'phone',
        'fax',
        'fb',
        'email',
    ];
}
