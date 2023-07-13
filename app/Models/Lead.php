<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'source',
        'category',
        'price',
        'status',
        'created_by'
    ];

    public function status() {
        return $this->hasOne(LeadStatus::class);
    }

    public function category() {
        return $this->hasOne(Category::class);
    }

    public function sources() {
        return $this->hasMany(Source::class);
    }

    public function created_by() {
        return $this->hasOne(User::class);
    }
}
