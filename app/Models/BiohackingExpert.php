<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BiohackingExpert extends Model
{
    protected $table = 'biohacking_experts';
    protected $fillable = ['name', 'purchase_url'];
}