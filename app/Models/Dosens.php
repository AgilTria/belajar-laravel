<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosens extends Model
{
    use HasFactory;


    protected $guarded= [  //$guarded perintah untuk apa aj yang ga boleh disi user , jadi cukup pilih satu antar $fillable atau $guarded
        'id',
        'created_at',
        'updated_at'
    ];
}




