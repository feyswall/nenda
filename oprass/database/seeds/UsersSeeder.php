<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\Admin::truncate();

      \App\Admin::create([
          'email' => 'admin@gmail.com',
          'name' => 'admin',
          'password' => Hash::make('password'),
      ]);
    }
}
