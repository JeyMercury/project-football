<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'diminutive',
        'coach',
        'country_id',
        'players',
    ];

    protected $cast = [
        'country_id' => 'int',
        'players' => 'array',
    ];

    /**
     * The competitions that belong to the team.
     */
    public function competitions()
    {
        return $this->belongsToMany(Competition::class, 'competition_team', 'team_id', 'competition_id');
    }

    /**
     * Get the players for the team.
     */
    public function players()
    {
        return $this->hasMany(Player::class, 'team_id');
    }
}
