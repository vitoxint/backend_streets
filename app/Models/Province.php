<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commune;
use App\Models\Region;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function communes()
    {
        // Entregar las comunas relacionadas
        return $this->hasMany(Commune::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function delete()
    {
        // Eliminar todas las comunas relacionadas
        $this->communes()->each(function ($commune) {
            $commune->delete();
        });

        
        // Luego eliminar la comuna
        return parent::delete();
    }
}
