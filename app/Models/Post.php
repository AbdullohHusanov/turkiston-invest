<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'view',
        'content',
        'img'
    ];
    protected $table = 'posts';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PostsCategories::class, 'post_categories', 'post_id', 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
