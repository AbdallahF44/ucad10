<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function contentType()
    {
        return $this->belongsTo(ContentType::class, 'content_type_id');
    }
}
