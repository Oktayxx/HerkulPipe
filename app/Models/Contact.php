<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Поля, которые разрешены для массового заполнения
    protected $fillable = [
        'name',
        'company',
        'phone',
        'product_id',
    ];
}
