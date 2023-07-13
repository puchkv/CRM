<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Source extends Model
{
    use HasFactory;

    public function leads() {
        $this->hasMany(Lead::class);
    }
}
