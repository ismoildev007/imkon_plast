<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemTeam extends Model
{
    use HasFactory;

    protected $fillable = [
      'full_name',
      'position_uz',
      'position_ru',
      'position_en',
      'date',
      'email',
      'image',
    ];
}
