<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    public const TYPE_UNCATEGORIZED = 0;
    public const TYPE_ARTICLES = 1;
    public const TYPE_ADVERTISEMENTS = 2;
    public const TYPE_NEWS = 3;
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    use HasFactory;
    use HasTranslations;
    use SoftDeletes;


    protected $fillable = ['title', 'content', 'status', 'type'];
    public $translatable = ['title', 'content'];

//    protected function Title(): Attribute
//    {
//        return Attribute::make(
//            get: fn(string $value) => $value?ucfirst($value):'',
//            set: fn(string $value) => $value?ucfirst($value):'',
//        );
//    }
}
