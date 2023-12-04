<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $table = "products";

    
    public function getLatestProducts()
    {
        return $this->where('created_at', '>=', now()->subDays(3))->latest()->get();
    }
}
