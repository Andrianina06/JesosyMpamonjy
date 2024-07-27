<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\User;
use App\Models\Equipe;
use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evenement extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the exemple that owns the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exemple() : BelongsTo{
        return $this->BelongsTo(Exemple::class, 'exemple_evenement_id');
    }

    /**
     * Get the lieu that owns the Evenement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lieu() : BelongsTo{
        return $this->BelongsTo(Lieu::class, 'lieu_id');
    }

    public function personne(){
        return $this->BelongsTo(Personne::class, 'personne_resp_id');
    }

    public function musicien(){
        return $this->belongsTo(Equipe::class, 'equipe_musicien_id');
    }
    
    public function cuisinier(){
        return $this->belongsTo(Equipe::class, 'equipe_cuisine_id');
    }

    public function videaste(){
        return $this->belongsTo(Equipe::class, 'equipe_videaste_id');
    }

    public function vehicules() : BelongsToMany {
        return $this->belongsToMany(Vehicule::class);
    }
}
