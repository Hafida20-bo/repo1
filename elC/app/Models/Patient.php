<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable =['nom','prenom','num_securite','tel','email','date_naissance','maladie','allergie','antecedent','commmentaire'];
}
