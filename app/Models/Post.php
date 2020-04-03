<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Post extends Model
{

    protected $table = 'my_post';
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable =[
        'title', 'content'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::uuid4()->toString();
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
