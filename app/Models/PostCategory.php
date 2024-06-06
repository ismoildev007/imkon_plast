<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_categories';

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
    ];

    public function Post()
    {
        return $this->hasMany(Post::class);
    }
}
