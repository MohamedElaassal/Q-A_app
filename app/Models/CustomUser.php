<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomUser extends Model
{
    use HasFactory;
    use softDeletes;

    public function questions() {
        return $this->hasMany(Question::class, 'user_id');
    }
}
