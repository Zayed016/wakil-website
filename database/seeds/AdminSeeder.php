<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {
          DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('wakil'),
            ]);
    }
}
