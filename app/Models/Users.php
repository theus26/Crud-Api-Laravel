<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'bd_agenda_telefonica';

    protected $fillable = [
        'name',
        'email',
        'dateNasc',
        'CPF',
        'phone'
    ];
}
