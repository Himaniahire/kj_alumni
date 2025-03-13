<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Alumni extends Authenticatable
{
    protected $table = 'alumnis';
    protected $primaryKey = 'id';

    protected $fillable = [
        'type_membership', 'sname', 'name', 'mname', 'profile', 'password',
        'gender', 'dob', 'admission_year', 'passing_year', 'branch',
        'other_isntitute', 'email', 'phone', 'address',
        'name_organization', 'year', 'job', 'other_achivements'
    ];
}
