<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'Diskominfo',
            'nip' => '1234567890123456',
            'email' => 'Diskominfo@bontangkota.go.id',
            'password' => Hash::make('12345678'),
            'remember_token' =>Str::random(32),
            'opd_id' => '23',

        ]);

        $user->assignRole('admin');
    }
}
