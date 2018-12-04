<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventDiscountsModel extends Model
{
    protected $table = 'event_discounts_tbl';
    public $primaryKey = 'ed_tbl';
    public $timestamps = false;
    protected $fillable = [
        'event_id',
        'discount',
        'discount_count'
    ];
}
