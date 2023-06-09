<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ForumComment extends Model
{
    use HasFactory;

    protected $table = 'forum_comments';

    protected $fillable = [
        'message',
        'question_id',
        'client_id',
        'parent_id'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Forum::class, 'question_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(ForumComment::class, 'parent_id', 'id');
    }
}
