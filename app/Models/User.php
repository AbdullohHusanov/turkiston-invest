<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Pktharindu\NovaPermissions\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'surname',
        'family_name',
        'phone'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'created_by', 'id');
    }

    public function pages(): HasMany
    {
        return $this->hasMany(Page::class, 'created_by', 'id');
    }

    public function posts_categories(): HasMany
    {
        return $this->hasMany(PostsCategories::class);
    }

    public function pages_categories(): HasMany
    {
        return $this->hasMany(PagesCategories::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(PostComments::class);
    }

    public function forums(): HasMany
    {
        return $this->hasMany(Forum::class, 'client_id', 'id');
    }

    public function forumComments(): HasMany
    {
        return $this->hasMany(ForumComment::class, 'client_id', 'id');
    }
}
