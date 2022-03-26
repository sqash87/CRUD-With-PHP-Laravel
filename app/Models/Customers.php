<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = ['id','customer_name','customer_email','euipment_id','device_name'];

    public function equipments()
    {
        return $this->belongsTo(Equipments::class);
    }
    
}
