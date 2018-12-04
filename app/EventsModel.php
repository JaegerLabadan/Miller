<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    protected $table = 'events_tbl';
    public $primaryKey = 'event_id';
    protected $fillable = [
        'category_of_event',
        'event_name',
        'location',
        'start',
        'end',
        'promo_codes',
        'event_banner'
    ];
}
