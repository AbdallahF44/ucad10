<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public const TYPE_ARTICLES = 1;
    public const TYPE_ADVERTISEMENTS = 2;
    public const TYPE_NEWS = 3;
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 2;

    use HasFactory;

    protected $fillable = ['title', 'content', 'status', 'type'];

    protected function Title(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => ucfirst($value),
        );
    }
}
