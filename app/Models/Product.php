<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'power', 'leds_number', 'mounting_method', 'ripple',
        'color_temperature', 'light_flow', 'color_rendering_index', 'protection_class', 'operating_temperature',
        'supply_voltage', 'guarantee', 'length', 'height', 'width'];
}
