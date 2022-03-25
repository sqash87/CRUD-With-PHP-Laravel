<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = ['id','customer_name','customer_email', 'equipment_id'];
    use HasFactory;
}
