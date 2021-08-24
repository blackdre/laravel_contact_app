<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'id_number',
        'mobile_number',
        'email_address',
    ];
    public $timestamps = false;
}
