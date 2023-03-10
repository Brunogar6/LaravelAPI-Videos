<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'url', 'categoria_id'];

    public function categoria() 
    {
        return $this->hasOne(Categoria::class);
    }
}
