<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users_tbl';
    public $primaryKey = 'user_id';
    protected $fillable = [
        'username',
        'password',
        'company_name',
        'vendor_name',
        'title',
        'firstname',
        'lastname',
        'address_one',
        'address_two',
        'city',
        'province',
        'zip',
        'phone',
        'fax',
        'company_industry',
        'product_specification',
        'nature'
    ]; 
}
