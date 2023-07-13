<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
    ];

    public function leads() {
        return $this->hasMany(Lead::class);
    }


}
