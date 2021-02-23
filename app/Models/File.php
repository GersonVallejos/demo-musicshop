<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
class File extends Model
{
    use HasFactory;

    protected $fillable = ['url','producto_id'];

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
