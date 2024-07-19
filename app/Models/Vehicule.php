<?php

namespace App\Models;

use App\Models\Etats;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicule extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function etat() : BelongsTo {
        return $this->belongsTo(Etats::class, 'etat_id');
    }

    
}
