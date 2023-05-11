<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageTeamSection extends Model
{
    use HasFactory;

    protected $table = 'main_page_team_section';

    protected $fillable = [
        'icon', 'full_name', 'position'
    ];
}
