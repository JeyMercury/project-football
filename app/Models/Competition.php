<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'host_country',
        'teams',
    ];

    protected $cast = [
        'teams' => 'array',
    ];

    /**
     * The teams that belong to the competition.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'competition_team', 'competition_id', 'team_id')->withTimestamps()->as('competition_teams');
    }
}
