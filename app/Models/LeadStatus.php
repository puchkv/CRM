<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class LeadStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_code',
        'status_name',
    ];
}
