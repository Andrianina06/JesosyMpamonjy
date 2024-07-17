<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\Eglise;
use App\Models\Fonction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personne extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fonction() : BelongsTo
    {
        return $this->BelongsTo(Fonction::class, 'fonction_id');
    }

    public function eglises(){
        return $this->BelongsToMany(Eglise::class);
    }

    /**
     * Get the lieu that owns the Personne
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lieu(): BelongsTo
    {
        return $this->belongsTo(Lieu::class, 'lieu_id');
    }
    public function scopeIsPasteur(Builder $builder) 
    {
        $id = Fonction::where('libelle', 'Pasteur')->first();
        return $builder->where('fonction_id', $id->id);
    }
}
