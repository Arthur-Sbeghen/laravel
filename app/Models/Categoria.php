<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $fillable = ['nome'];

    public function posts() : HasMany {
        return $this->hasMany(Post::class);
    }
}
