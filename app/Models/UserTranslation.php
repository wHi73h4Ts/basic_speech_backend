<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserTranslation extends Model
{
    protected $table = 'user_translation';

    protected $fillable = [
        'user_id',
        'translation_id',
    ];
}
