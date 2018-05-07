<?php

use Illuminate\Database\Seeder;

class UserTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $users = [
            [
                'name'     => 'bharat',
                'email'    => 'admin@bharat.com',
                'username' => str_slug('prera Admin'),
                'password' => bcrypt('admin@bharat')
            ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('users')->insert($users);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
