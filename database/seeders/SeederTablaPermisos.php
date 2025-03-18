<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $permisos = [
            //Operacions sobre tabla usuarios
            'ver-usuario', 'crear-usuario', 'editar-usuario', 'borrar-usuario',
            //Operacions sobre tabla roles
            'ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol',
            //Operacions sobre tabla hoteles
            'ver-servicio-hotel', 'crear-servicio-hotel', 'editar-servicio-hotel',
            'borrar-servicio-hotel',
            //Operacions sobre tabla restaurantes
            'ver-servicio-restaurante', 'crear-servicio-restaurante', 'editar-servicio-restaurante',
            'borrar-servicio-restaurante',
            //Operacions sobre tabla transporte
            'ver-servicio-transporte', 'crear-servicio-transporte', 'editar-servicio-transporte',
            'borrar-servicio-transporte',
            //Operacions sobre tabla noticias
            'ver-noticia', 'crear-noticia', 'editar-noticia',
            'borrar-noticia',
            //Operacions sobre tabla reseñas
            'ver-reseña', 'crear-reseña', 'editar-reseña',
            'borrar-reseña'
        ];
    
        foreach($permisos as $permiso){
            Permission::firstOrCreate([
                'name' => $permiso,
                'guard_name' => 'web'
            ]);
        }
    }
 }
