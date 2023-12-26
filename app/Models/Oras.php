<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oras extends Model
{
    use HasFactory;

    protected $fillable = ['temperatura', 'vejo_kryptis', 'slegis'];
}
