<?php

// NoticesTableSeeder.php    
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            'name'     => 'Cesar Polo',
            'email'    => 'cesar.polo3112@gmail.com',
            'password' => Hash::make('1234'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ];
        DB::table('users')->insert($users);
    }

}