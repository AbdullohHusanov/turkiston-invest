<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value'
    ];
    protected $table = 'main_page_config';
}
