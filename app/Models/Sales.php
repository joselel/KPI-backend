<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'sales';
    //protected $fillable = ['nit_client', 'articles', 'total','created_at'];
}
