<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'view',
        'content',
        'img'
    ];
    protected $table = 'pages';

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PagesCategories::class, 'page_categories', 'page_id', 'category_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
