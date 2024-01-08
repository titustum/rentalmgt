<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetail extends Model
{
    use HasFactory; 

    protected $fillable = ['user_id', 'county', 'constituency', 'ward', 'village', 'kin_name', 'kin_phone'];
}
