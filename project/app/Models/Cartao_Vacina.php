<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartao_Vacina extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vaccine',
        'date',
        'age',
        'dose',
    ];

    protected $primaryKey = 'id';
    protected $table = 'cartao__vacinas';

}
