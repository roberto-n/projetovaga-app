<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pet extends Model
{
    use HasFactory;
    public $fillable=[
       'nome',
       'idade',
       'tipo',
       'raca',
       'dono',
       'contatodono'

    ];


}
