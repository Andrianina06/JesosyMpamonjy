<?php

namespace App\Models;

use App\Models\Lieu;
use App\Models\EquipeFonction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipe extends Model
{
    use HasFactory;
    
    protected $table = 'equipe';

    protected $guarded = ['id'];

    
    public function lieu() : BelongsTo {
        return $this->belongsTo(Lieu::class, 'lieu_id');
    }
}
