<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;

class AddAdminPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $permission = Permission::query()->firstOrCreate([
            'name' => 'admin-permissions',
            'display_name' => 'admin-permissions',
            'description' => 'admin-permissions'

        ]);
        Role::whereName('admin')->first()->attachPermission($permission);
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Permission::whereName('admin-permissions')->delete();
        //
    }
}
