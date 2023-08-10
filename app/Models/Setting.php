<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\Translatable\HasTranslations;


class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;
    public $translatable = ['key', 'value'];
    protected $fillable = ['name', 'url'];


    public static function getValueByKey($key, $default = 'site_name')
    {
        $setting = DB::select("SELECT * FROM settings WHERE `name` = ? LIMIT 1", [$key])[0];
        // dd($setting->value);
        return $setting ? $setting->url : $default;

    }

    protected function Name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn(string $value) => ucfirst($value),
        );
    }

//// fetch settings wherever
//$siteName = Setting::getValueByKey('site_name', 'My Site');

}
