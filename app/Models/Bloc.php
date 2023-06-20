<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Bloc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'nom_bloc',
        'bati',
        'residence_id'
    ];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid()."-bloc";
        });
    }
    public function residence()
    {
        return $this->belongsTo(Residence::class);
    }
    public function relatedAppartements()
    {
        return $this->hasMany(Appartement::class);
    }
}
