<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    
    // lista de atributos que podem ser preenchidos em um modelo ou classe.
    protected $fillable = ['nome'];
}
