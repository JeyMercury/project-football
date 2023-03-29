<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dorsal',
        'nationality',
        'team_id',
        'position',
    ];

    protected $cast = [
        'dorsal' => 'int',
        'team_id' => 'int',
    ];

    /**
     * Get the team that owns the player.
     */
    public function team()
    {
        return $this->belongsTo(Team::class, 'player_id');
    }
}
