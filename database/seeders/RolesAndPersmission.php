<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;


class RolesAndPersmission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $create_record = Permission::create(['name' => 'create-records']);
        $edit_record = Permission::create(['name' => 'edit-records']);
        $delete_record = Permission::create(['name' => 'delete-records']);

        $adminRole = Role::create(['name' => 'admin']);
        $dataEntryRole = Role::create(['name' => 'data-entry']);

        $adminRole->givePermissionTo([$create_record, $edit_record, $delete_record]);
        $dataEntryRole->givePermissionTo([$create_record]);

        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
        $dataEntryUser = User::create([
            'name' => 'Jerico',
            'email' => 'jerico@gmail.com',
            'password' => bcrypt('jerico')
        ]);

        $adminUser->assignRole($adminRole);
        $dataEntryUser->assignRole($dataEntryRole);
    }
}
