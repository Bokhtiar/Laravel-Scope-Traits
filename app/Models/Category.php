<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFilter;

class Category extends Model
{
    use HasFactory;
    use HasFilter;
    protected $fillable=[
        'name', 'description', 'status',
    ];
}
