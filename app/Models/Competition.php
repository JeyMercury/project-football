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
        'n_participants_teams',
    ];

    protected $cast = [
        'n_participants_teams' => 'int',
    ];

    /**
     * The teams that belong to the competition.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
