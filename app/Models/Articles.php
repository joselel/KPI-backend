<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Articles extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    //protected $fillable = ['name', 'price_buy', 'price_sale','stock'];
}
