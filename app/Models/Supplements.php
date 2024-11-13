<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplements extends Model
{
    protected $table = 'supplements';
    protected $fillable = ['name', 'description', 'purchase_url'];
}