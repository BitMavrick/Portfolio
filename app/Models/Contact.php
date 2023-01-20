<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    //spcify the table name
    protected $table = 'contact';

    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}