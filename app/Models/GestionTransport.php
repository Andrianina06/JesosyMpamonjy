<?php

namespace App\Models;

use App\Models\Vehicule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GestionTransport extends Model
{
    use HasFactory;
    protected $table = 'gestiontransport';

    protected $guarded = ['id'];

    public function evenement() : BelongsTo {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }

    public function vehicule() : BelongsTo {
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }
}
