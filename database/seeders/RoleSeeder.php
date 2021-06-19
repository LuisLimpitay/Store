<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'vendedor']);
        //$role3 = Role::create(['name' => 'cliente']);

        $permission = Permission::create(['name' => 'admin.index'])->syncRoles([$role1, $role2]);

        $permission = Permission::create(['name' => 'admin.sales.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.sales.create'])->syncRoles([$role2]);
        $permission = Permission::create(['name' => 'admin.sales.destroy'])->syncRoles([$role2]);

        $permission = Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.users.update'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.categories.destroy'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.turns.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.turns.create'])->syncRoles([$role2]);
        $permission = Permission::create(['name' => 'admin.turns.edit'])->syncRoles([$role2]);
        $permission = Permission::create(['name' => 'admin.turns.destroy'])->syncRoles([$role2]);

        $permission = Permission::create(['name' => 'admin.products.index'])->syncRoles([$role1, $role2]);
        $permission = Permission::create(['name' => 'admin.products.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.products.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.products.destroy'])->syncRoles([$role1]);

    }
}
