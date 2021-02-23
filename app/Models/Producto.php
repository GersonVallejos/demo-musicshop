<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;

class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function files(){
        return $this->hasMany(File::class);
    }
}
