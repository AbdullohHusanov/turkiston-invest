<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PagesCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img',
        'description'
    ];

    protected $table = 'pages_categories';

    public function pages(): BelongsToMany
    {
        return $this->belongsToMany(Page::class, 'page_categories', 'category_id', 'page_id');
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
