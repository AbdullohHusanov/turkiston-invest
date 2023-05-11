<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'slug',
        'view',
        'content_uz',
        'content_ru',
        'content_en',
        'description_uz',
        'description_ru',
        'description_en',
        'img'
    ];
    protected $table = 'posts';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PostsCategories::class, 'post_categories', 'post_id', 'category_id');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(PostComments::class);
    }
}
