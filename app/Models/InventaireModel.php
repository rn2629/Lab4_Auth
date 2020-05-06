<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventaireModel extends Model
{
    protected $table = "inventaires";

    protected $fillable =[
        'type',
        'description',
        'image',
        'prix',
        'name',
        'created_at',
        'updated_at',
    ];
}
