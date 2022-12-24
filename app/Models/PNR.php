<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PNR extends Model
{
    use HasFactory;
    protected $table='pnr';
    protected $fillable = [
        'etablissement', 'desc', 'image'
    ];
}
