<?php

use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      
        $faker = Faker\Factory::create();

        App\User::truncate();
       

        App\User::create([
                'name' => 'Leriston',
                'username' => 'leriston123',
                'email' => 'leriston@gmail.com',
                'password' => bcrypt('leristonsinaga12'),
                'role' => 'tatausaha',
            ]);

        App\User::create([
                'name' => 'Kepala',
                'username' => 'Kepala123',
                'email' => 'kepala@gmail.com',
                'password' => bcrypt('kepala12'),
                'role' => 'headmaster',
            ]);
    }
}
