<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesPgSql extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';
    protected $table = 'sales';
}
