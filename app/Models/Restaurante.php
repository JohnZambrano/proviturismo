<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth; // Importa Auth
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;

class Restaurante extends Model
{
    use HasFactory, HasRoles;
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'imagen'];

    // App\Models\Restaurante

    public function getLikesAttribute() {
        return $this->relationLoaded('likes') ? $this->getRelation('likes') : collect();
    }
    protected $withCount = ['likes'];

  

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes')
                    ->withTimestamps();
                    
    }

    // En tu modelo Restaurante.php
    public function __call($method, $parameters) {
        if ($method === 'likes') {
            return $this->belongsToMany(User::class, 'likes')
                    ->using(\Illuminate\Database\Eloquent\Relations\Pivot::class)
                    ->withTimestamps();
        }
        return parent::__call($method, $parameters);
    }

    // Sobreescribe el método para evitar errores
    public function getRelationValue($key) {
        if ($key === 'likes' && !array_key_exists($key, $this->relations)) {
            return $this->getRelationshipFromMethod($key);
        }
        return parent::getRelationValue($key);
    }
        
 }
