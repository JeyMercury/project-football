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
    ];

    protected $cast = [
        'country_id' => 'int',
    ];

    /**
     * The competitions that belong to the team.
     */
    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }
}
