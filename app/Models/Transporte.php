<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth; // Importa Auth
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class Transporte extends Model
{
    use HasFactory, HasRoles;
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'imagen'];
    

}

     

