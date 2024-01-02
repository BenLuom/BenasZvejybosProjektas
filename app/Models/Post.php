<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'post_text', 'category_id', 'miestas_id', 'faze_id', 'oras_id'];
    protected $get = "Oro temperatūra" + "Vėjo greitis" + "Vėjo kryptis" + "Debesuotumas" + "Atmosferos slėgis" + "Oro drėgnis" + "Mėnulio fazė" / 7;
}
