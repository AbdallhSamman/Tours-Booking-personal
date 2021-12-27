<?php

namespace App\Models;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
            'id',
            'category_name',
            'category_desc',
            'category_img',
        ];


    public function trip() {
        return $this->hasMany(Trip::class);
    }

}
