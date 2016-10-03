<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Edo extends Model
{
    protected $table = 'edos';
    protected $fillable = [
        'nom_edo'
    ];
}
