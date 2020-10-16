<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'image'];

    protected $dates = ['deleted_at'];//trrá sempre essas colunas usando o Carbon

    public function products()
    {
        $this->hasMany(Product::class);
    }

}
