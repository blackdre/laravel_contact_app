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
        'rsa_id',
        'phone',
        'email',
        'date_of_birth',
        'language',
        'interests'
    ];
    public $timestamps = false;
}
