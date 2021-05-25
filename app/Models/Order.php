<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saveOrder($data)
    {
        $this->client_name = $data['name'];
        $this->client_address = $data['address'];
        $this->total_product_value = $data['address'];
        $this->total_shipping_value = $data['delivery-method'];
        $this->save();
    }
}
