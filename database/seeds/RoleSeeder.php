<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       app()['cache']->forget('spartie.permission.cache');
       Role::create(['name' => 'admin_super']);
       Role::create(['name' => 'admin']);
       Role::create(['name' => 'admin_opd']);
       Role::create(['name' => 'member']);
    }
}
