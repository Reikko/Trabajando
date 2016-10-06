<?php

namespace azf;

use Illuminate\Database\Eloquent\Model;

class Fracc extends Model
{
    protected $table = 'fraccs';
    protected $fillable = [ 'id_col','nom_frac'];

}
