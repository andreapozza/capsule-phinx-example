<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content
 */
class Answer extends Model
{
    protected $fillable = [
        'content',
        'is_correct'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
