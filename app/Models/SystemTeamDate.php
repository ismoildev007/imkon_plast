<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemTeamDate extends Model
{
    use HasFactory;

    protected $table = 'system_team_dates';

    protected $fillable = [
      'system_id',
      'dateDay',
      'timeDay',
    ];
}
