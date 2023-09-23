<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $fillable = [
        'comprador_id',
        'produto_id',
        'total',
        'status',
        'created_at',
        'updated_at',
    ];
}
