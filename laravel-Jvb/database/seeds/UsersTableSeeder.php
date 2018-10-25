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
        //
        DB::table('admin')->truncate();
        App\User::create([
        	'name' => 'roger',
        	'email' =>'nts1997z@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    }
}
