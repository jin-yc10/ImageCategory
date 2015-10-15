<?php

use Illuminate\Database\Seeder;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User;
        $role = new \App\Roles\BaseRole;
        $permission = new \App\Permissions\BasePermission;
    }
}
