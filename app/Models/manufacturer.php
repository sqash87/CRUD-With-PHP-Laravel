<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;


class Manufacturer extends Model
{
    protected $fillable = ['company_name', 'sales_email', 'tech_email'];
    use HasFactory;

    public function equipments()
    {
        return $this->hasMany(Equipments::class);
    }

    
}
