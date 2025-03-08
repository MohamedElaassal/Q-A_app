<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CustomUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{

    use HasFactory;
    use SoftDeletes;

    public function user() {
        return $this->belongsTo(CustomUser::class);
    }
}
