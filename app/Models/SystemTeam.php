<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Event\Telemetry\System;

class SystemTeam extends Model
{
    use HasFactory;

    protected $fillable = [
      'full_name',
      'position_uz',
      'position_ru',
      'position_en',
      'email',
      'image',
    ];

    public function systems()
    {
        return $this->hasMany(SystemTeamDate::class, 'system_id');
    }
}
