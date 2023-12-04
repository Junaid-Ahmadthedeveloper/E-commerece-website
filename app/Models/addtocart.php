<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addtocart extends Model
{
    use HasFactory;
    protected $priarykey = 'id';
    protected $table='add_cart';
}
