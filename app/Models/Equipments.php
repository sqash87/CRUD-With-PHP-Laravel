<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\manufacturer;
use App\Models\Customer;

class Equipments extends Model
{
    protected $fillable = ['customer_id', 'manufacturer_id', 'invoice', 'equipment_name','purchaseDate', 'cpu', 'price','ram','storage','notes'];
    use HasFactory;

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(manufacturer::class);
    }
}
