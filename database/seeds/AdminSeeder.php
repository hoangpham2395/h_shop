<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->truncate();
        $admin = [
            'name' => 'administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'level' => 1,
            'phone' => '0123456789',
            'ins_id' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ];
        DB::table('admin')->insert($admin);
    }
}
