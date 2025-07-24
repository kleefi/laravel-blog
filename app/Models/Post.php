<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $casts = [
        'is_slider' => 'boolean',
    ];
    protected $fillable = [
        "title",
        "slug",
        "body",
        "category_id",
        "image",
        "user_id",
        "is_slider"
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
