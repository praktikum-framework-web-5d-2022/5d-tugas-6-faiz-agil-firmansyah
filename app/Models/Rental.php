<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
