<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected $table = 'colonias';
    protected $fillable = [
        'id_edo',
        'nom_col',
    ];

    public static function colonias($id)
    {
        return Colonia::where('id_edo','=',$id)
        ->get();
    }
}
