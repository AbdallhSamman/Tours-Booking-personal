<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'max_visitors',
        'price',
        'date',
        'image',
        'guide_id',
        'category_id',
    ];

    // For Guide [one-many]
    public function guide()
    {
        return $this->belongsTo(User::class);
    }

    // For Reservation [many-many]
    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('id','booking_date','status');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
