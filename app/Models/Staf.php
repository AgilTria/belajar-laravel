<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;
    protected $guarded= [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $table= 'staf'; // ini digunakan jika tablenya berbeda, intinya untuk mendeklarisikan staf trus tersebut

}
