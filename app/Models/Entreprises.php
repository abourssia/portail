<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    use HasFactory;
    protected $table='entreprises';
    protected $fillable = [
        'name',
        'website',
        'address',
        'formejur',
        'proprietyent',
        'typeactntr',
        'domaineactentr',
        'domainetr',
        'typetr',
        'secteuract',
        'rndentr',
        'compscien',
        'desc',
        'problematiques',
        'remarques',
        'desc'
    ];

}
