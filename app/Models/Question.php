<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content
 */
class Question extends Model
{
    protected $fillable = [
        'content'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
