<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    //premier methode
   // public $fillable = ['nom', 'prenom', 'matricule', 'age'];

   //Deuxieme methode
   protected $guarded =  [];
}

