<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHome extends Model
{
    use HasFactory;
    protected $table = 'data_home';
    protected $guarded = [''];
}
