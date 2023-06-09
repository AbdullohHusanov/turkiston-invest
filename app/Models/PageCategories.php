<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCategories extends Model
{
    use HasFactory;

    protected $table = 'page_categories';

    protected $fillable = [
        'page_id', 'category_id'
    ];

}
