<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    public const STATUS_UNREAD=0;
    public const STATUS_READ=1;
    public const STATUS_PENDING=2;
    use HasFactory;
    use SoftDeletes;

    public $guarded=[];

}
