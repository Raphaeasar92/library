<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelReservation extends Model
{
    protected $table = 'reservation';

    protected $fillable=['id_book','days'];

    public function relBooks()
    {
        
        return $this->hasOne('App\Models\ModelBook','id','id_book');
    }
}
