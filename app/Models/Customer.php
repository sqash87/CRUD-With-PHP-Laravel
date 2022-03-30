<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;

class Customer extends Model
{
    protected $fillable = ['customer_name','customer_email'];
    use HasFactory;

    function equipments()
    {
        return $this->hasMany(Equipments::class);
    }
}
