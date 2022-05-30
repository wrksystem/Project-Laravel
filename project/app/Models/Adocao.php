<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adocao extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'proof_of_address',
        'income_value',
        'proof_of_value',
    ];

    protected $primaryKey = 'id';
    protected $table = 'adocaos';
}
