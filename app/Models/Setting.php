<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Translatable\HasTranslations;


class Setting extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;
    public $translatable = ['key', 'value'];
    protected $fillable = ['key', 'value'];


//     public static function getValueByKey($key, $default = null)
// {
//     $setting = self::where('key', $key)->first();

//     return $setting ? $setting->value : $default;
// }

//// fetch settings wherever
//$siteName = Setting::getValueByKey('site_name', 'My Site');

}
