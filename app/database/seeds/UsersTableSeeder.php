<?php

// NoticesTableSeeder.php    
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            'name'     => 'Cesar Polo',
            'email'    => 'compras.polop@gmail.com',
            'password' => Hash::make('1234'),
            'active'   => '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
            ];
        DB::table('users')->insert($users);
    }

}