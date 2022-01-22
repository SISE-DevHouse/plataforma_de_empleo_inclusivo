<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 *
 * @property $id
 * @property $nombreempresa
 * @property $ruc
 * @property $telefono
 * @property $correo
 * @property $direccion
 * @property $id_distrito
 * @property $created_at
 * @property $updated_at
 *
 * @property Distrito $distrito
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    
    static $rules = [
		'nombreempresa' => 'required',
		'ruc' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'direccion' => 'required',
		'id_distrito' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreempresa','ruc','telefono','correo','direccion','id_distrito'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function distrito()
    {
        return $this->hasOne('App\Models\Distrito', 'id', 'id_distrito');
    }
    

}
