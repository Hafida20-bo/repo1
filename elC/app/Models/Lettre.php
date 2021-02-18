<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lettre extends Model
{
    use HasFactory;
    protected $fillable =['nom_medecin','nom_patient','date','description'];
}
