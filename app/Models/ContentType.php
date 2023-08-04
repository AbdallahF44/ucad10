<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentType extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];

    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
