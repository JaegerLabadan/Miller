<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendeesModel extends Model
{
    protected $table = 'attendees_tbl';
    public $primaryKey = 'attendee_id';
    protected $fillable = [
        'event_id',
        'user_id',
        'company_name',
        'events',
        'booths',
        'totalAmountDue'
    ];
}
