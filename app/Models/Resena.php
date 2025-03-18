<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth; // Importa Auth
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;


class Resena extends Model
{
    // app/Models/Resena.php
    use HasFactory, HasRoles;
    use HasFactory;

      // En el Modelo Resena:
      protected $fillable = [
        'user_id', 
        'tipo', 
        'elemento_uid', 
        'origen', 
        'puntaje', 
        'texto_comentario',
        'fotos'
    ];
    
  // Asegurar casteo de fotos como array
    protected $casts = [
        'fotos' => 'array',
        'puntaje' => 'integer',
        'texto_comentario' => 'string'
    ];
       
        public function user()
        {
            return $this->belongsTo(User::class);
        }

}
