<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perscription extends Model
{
    use HasFactory;
    protected $fillable =['id','medecin','patient','date'];
}

