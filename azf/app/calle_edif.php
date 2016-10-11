<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class calle_edif extends Model
{


    protected $table = 'calle_edifs';
    protected $fillable = [
        'id_fra',
        'nom_calle',
    ];

    public static function colonias($id)
    {
        return Colonia::where('id_edo','=',$id)
            ->get();
    }
}
