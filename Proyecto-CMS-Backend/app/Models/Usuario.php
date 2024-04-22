<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable=["username","email","password","token"];

    // Primary Key
    protected $primaryKey = "id_usuario";
    public $incrementing = true;

    // protected $keyType = "string";
    protected $keyType = "integer";

    public $timestamps = false;


    /*
    public static function boot(){
        parent::boot();
        static::creating(function($model){
            $model->uuid = IdGenerator::generate(['usuarios' => $this->table, 'length' => 6, 'prefix' => date('y')]); 
        });
    }

    */
}



