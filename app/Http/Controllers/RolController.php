<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Exceptions\RoleAlreadyExists;
use Illuminate\Support\Facades\Log;

class RolController extends Controller
{
    public static function middleware(): array{
        return [
            // Define role-based permissions
            new \Spatie\Permission\Middleware\RoleMiddleware('ver-rol', ['only' => ['index']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('crear-rol', ['only' => ['create', 'store']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('editar-rol', ['only' => ['edit', 'update']]),
            new \Spatie\Permission\Middleware\RoleMiddleware('borrar-rol', ['only' => ['destroy']])
        ];
   }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = Permission::get();
        return view ('roles.crear', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
   
   
     public function store(Request $request)
    {
        try {
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            
            return redirect()->route('roles.index')
                ->with('éxito', 'Rol creado exitosamente');
        } catch (RoleAlreadyExists $exception) {
            return back()
                ->withErrors(['name' => 'Este rol ya existe'])
                ->withInput();
        }
         $validated = $request->validate([
            'name' => 'required',
            'permission' => 'required'
        ]);

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions); // Use syncPermissions()
        
        return redirect()->route('roles.index')->with('éxito', 'Rol credo exitosamente');

       
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
  
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table('role_has_permissions')
            ->where('role_id', $id)
            ->pluck('permission_id')
            ->all();
        
        return view('roles.editar', compact('role', 'permission', 'rolePermissions'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'permission' => 'array|nullable'
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->input('name');
        $role->save();

        // Ensure only existing permissions are synced
        $permissions = Permission::whereIn('id', $request->input('permission', []))->pluck('id');
        $role->syncPermissions($permissions);

        return redirect()->route('roles.index')->with('éxito', 'Rol actualizado satisfactoriamente');
    }
        

    /*
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $id)
    {
        DB::table('roles')->where('id',$id)->delete();
        return redirect()->route('roles.index');
    }
}
