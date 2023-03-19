<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'cms_role_id'    => 1,
                'id'             => (string) Str::uuid(),
                'name'           => 'superadmin',
                'email'          => 'miakalnd@gmail.com',
                'phone'          => '088220148340',
                'status'         => 'active',
                'password'       => Hash::make('admin')
            ],

            [
                'cms_role_id'    => 2,
                'id'             => (string) Str::uuid(),
                'name'           =>'admin',
                'email'          =>'admin@nfs.com',
                'phone'          =>'082238982100',
                'status'         =>'active',
                'password'       =>Hash::make('123456')
            ],


        ]);
    }
}
