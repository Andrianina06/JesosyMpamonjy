<?php

namespace App\Models;

use App\Models\Personne;
use App\Models\Eglise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Affectation extends Model
{
    use HasFactory;
    protected $table = 'eglises_personne';
    protected $guarded = ['id'];

    public function personne(){
        return $this->BelongsTo(Personne::class);
    }

    public function egliseDepart(){
        return $this->BelongsTo(Eglise::class, 'eglise_depart_id');
    }

    public function egliseArrivee(){
        return $this->BelongsTo(Eglise::class, 'eglise_arrivee_id');
    }
}
