<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;
    protected $fillable = ['medecin', 'patient','date_debut','date_fin','motif'];
}
