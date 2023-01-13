<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipe_error extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'unique_id','unique_id');
    }
}
