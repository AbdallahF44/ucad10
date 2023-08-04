<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public const ADVERTISEMENT = 1;
    public const NEWS = 2;
    public const CONTRIBUTOR = 3;
    protected $fillable = ['title', 'content', 'type'];

}
