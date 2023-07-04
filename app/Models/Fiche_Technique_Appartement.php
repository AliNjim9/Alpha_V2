<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_Technique_Appartement extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
       
    ];
    public function relatedAppartement()
    {
        return $this->belongsTo(Appartement::class,'appartement_id');
    }
}

