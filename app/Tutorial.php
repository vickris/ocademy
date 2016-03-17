<?php

namespace Ocademy;

use Ocademy\User;
use Ocademy\Category;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use \Conner\Likeable\LikeableTrait;

    protected $fillable = ['title', 'description', 'url', 'user_id', 'category_id'];

    public function category()
    {
        return $this->belongsTo('Ocademy\Category');
    }
    public function user()
    {
        return $this->belongsTo('Ocademy\User');
    }
}
