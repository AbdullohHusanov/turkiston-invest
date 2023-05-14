<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostsCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'img'
    ];

    protected $table = 'posts_categories';

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_categories', 'category_id', 'page_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
