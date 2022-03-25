<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $fillable = ['id','device_name', 'cpu', 'ram', 'storage', 'price', 'invoice','purchaseDate'];
    use HasFactory;
}
