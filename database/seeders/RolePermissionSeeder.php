<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'editor']);

        $permissions = ['create post', 'edit post', 'delete post'];

        foreach ($permissions as $perm) {
            $permission = Permission::firstOrCreate(['name' => $perm]);
            $admin->givePermissionTo($permission);
            $editor->givePermissionTo($permission);
        }
        $user = User::first(); // atau cari pakai email/id jika spesifik
        if ($user && !$user->hasRole('admin')) {
            $user->assignRole('admin');
        }
    }
}
