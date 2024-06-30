<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class Region extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function provinces()
    {
        // Entregar las provincias relacionadas
        return $this->hasMany(Province::class);
    }

    public function delete()
    {
        // Eliminar todas las provincias relacionadas
        $this->provinces()->each(function ($province) {
            $province->delete();
        });

        
        // Luego eliminar la región
        return parent::delete();
    }
}
