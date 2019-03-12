<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => NOW(),
            'updated_at' => NOW()
          ],
          [
            'name' => 'I Gede Pradipta Adi Nugraha',
            'email' => 'pradipta@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => NOW(),
            'updated_at' => NOW()
          ]
        ]);
    }
}
