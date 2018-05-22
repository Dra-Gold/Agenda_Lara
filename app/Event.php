<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Event extends Model
{
    //scope local que devuelve donde los usuario sean igual a los logeados
    public function scopeUsersCorrecto($query)
    {
        $id=Auth::id();
        return $query->where('user_id',$id);
    }

    protected $fillable = [
        'nombre', 'fecha', 'horai','horat','direccion','lat','lng','user_id'
    ];
}
