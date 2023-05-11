<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_question',
        'description_question',
        'slug',
        'view'
    ];
    protected $table = 'forums';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(ForumComment::class, 'question_id', 'id');
    }
}
