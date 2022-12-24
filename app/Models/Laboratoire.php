<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;
    protected $table='laboratoires';
    protected $fillable = [

        'code',
        'intitule',
        'wilaya',
        'etablissement',
        'directeur',
        'gdomainelabo',
        'domaine',
        'acronyme',
        'emaildirec',
        'numdirec',
        'desclabo',
        'keywordslabo',


    ];
}
