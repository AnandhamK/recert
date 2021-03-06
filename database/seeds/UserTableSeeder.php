<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();

        $user = array(
            'name'     => 'admin',
            'email'    => 'admin@recert.com',
            'password' => Hash::make('recert'),
        );
        User::create($user);

    }
}
