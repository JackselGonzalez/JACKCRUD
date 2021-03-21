<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celular extends Model
{
    //
    protected $table=('celular');
    protected $primarykey='id';
    public $timestamps= false;
    public $fillables=[
        'nom_cli',
        'marca',
        'color',
        'imeri'
    ];

}
