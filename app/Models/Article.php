<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use InteractsWithMedia;
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('articles_images');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
