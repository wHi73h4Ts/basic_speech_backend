<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTranslation extends Model
{
    protected $fillable = [
        'user_id',
        'translation_id',
    ];
}
