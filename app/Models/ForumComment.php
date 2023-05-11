<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ForumComment extends Model
{
    use HasFactory;

    protected $table = 'forum_comments';

    protected $fillable = [
        'message',
        'question_id',
        'client_id'
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Forum::class, 'question_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
}
