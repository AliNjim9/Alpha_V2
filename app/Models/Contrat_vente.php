<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Contrat_vente extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'acheteur_id',
        'vendeur_id',
        'type_vente',
        'date_contrat',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
    public function acheteur()
    {
        return $this->belongsTo(User::class, 'acheteur_id');
    }
    
    public function vendeur()
    {
        return $this->belongsTo(User::class, 'vendeur_id');
    }
    public function terrain_info()
    {
        return $this->belongsTo(Terrain::class, 'vente_id_terrain');
    }
    public function residence_info()
    {
        return $this->belongsTo(Residence::class, 'vente_id_residence');
    }
    public function appartement_info()
    {
        return $this->belongsTo(Appartement::class, 'vente_id_appartement');
    }
}
