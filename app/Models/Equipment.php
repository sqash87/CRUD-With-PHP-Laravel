<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = ['device_name', 'cpu', 'ram', 'storage', 'price', 'invoice','purchaseDate'];
    use HasFactory;
}
