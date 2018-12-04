<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBoothsModel extends Model
{
    protected $table = 'event_booths_tbl';
    public $parimaryKey = 'eb_id';
    public $timestamps = false;
    protected $fillable = [
        'event_id',
        'booth_space',
        'booth_count',
        'booth_price',
        'booth_specification',
        'day'
    ];
}
